<?php

namespace ConfrariaWeb\RealEstate\Controllers;

use ConfrariaWeb\Domain\Models\Domain;
use ConfrariaWeb\Domain\Requests\StoreDomain;
use ConfrariaWeb\Domain\Requests\UpdateDomain;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use ConfrariaWeb\Domain\Services\DomainService;
Use Alert;

class DomainController extends Controller
{

    public $data;
    public $domainService;

    /**
     * DomainController constructor.
     */
    public function __construct(DomainService $domainService)
    {
        $this->data = [];
        $this->domainService = $domainService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['domains'] = $this->domainService->all();
        return view('real-estate::domains.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('real-estate::domains.create', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDomain $request)
    {
        try{
            $data = $request->all();
            $domain = $this->domainService->create($data);
            return redirect()->route('dashboard.domains.edit', $domain->id)->with('success', 'Domínio criado com sucesso!');
        }catch(\Exception $e){
            return redirect()->route('dashboard.domains.create')->with('success', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try{
            $domain = $this->domainService->find($id);
            $zone = $this->domainService->getZonebyDomain($domain->domain);
            abort_unless($domain, 404);
            return view('real-estate::domains.show', compact('domain', 'zone'));
        }catch(\Exception $e){
            return redirect()->route('dashboard.domains.index')->with('success', $e->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data['domain'] = $this->domainService->find($id);
        abort_unless($this->data['domain'], 404);
        return view('real-estate::domains.edit', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDomain $request, $id)
    {
        $data = $request->except(['domain']);
        $domain = $this->domainService->update($id, $data);
        return redirect()
            ->route('dashboard.domains.edit', $id)
            ->with('success', 'Domínio editado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
