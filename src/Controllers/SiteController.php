<?php

namespace ConfrariaWeb\RealEstate\Controllers;

use App\Http\Controllers\Controller;
use ConfrariaWeb\Domain\Services\DomainService;
use ConfrariaWeb\Site\Services\SiteService;
use ConfrariaWeb\Site\Services\SiteTypeService;
use ConfrariaWeb\Site\Requests\StoreSiteRequest;
use ConfrariaWeb\Template\Services\TemplateService;

class SiteController extends Controller
{

    public $domainService;
    public $siteService;
    public $siteTypeService;
    public $templateService;

    public function __construct(
        DomainService $domainService, 
        SiteService $siteService, 
        SiteTypeService $siteTypeService,
        TemplateService $templateService
    ){
        $this->domainService    = $domainService;
       $this->siteService       = $siteService;
       $this->siteTypeService   = $siteTypeService;
       $this->templateService   = $templateService;
    }

    public function index()
    {
        $sites = $this->siteService->all();
        return view('real-estate::sites.index', compact('sites'));
    }

    public function create()
    {
        $types = $this->siteTypeService->pluck();
        return view('real-estate::sites.create', compact('types'));
    }

    public function store(StoreSiteRequest $request)
    {
        try{
            $data = $request->all();
            $site = $this->siteService->create($data);
            return redirect()->route('dashboard.sites.edit', $site->id)->with('success', 'Site criado com sucesso!');
        }catch(\Exception $e){
            return redirect()->route('dashboard.sites.create')->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        try{
            $site = $this->siteService->find($id);
            $templates = $this->templateService->pluck();
            $domains = $this->domainService->pluck();
            $template = $site->template?? null;
            $fields = include storage_path('app/public/views/templates/agents/fields.php');
        }catch(\Exception $e){
            return redirect()->route('dashboard.sites.index')->with('error', $e->getMessage());
        }
        abort_unless($site, 404);
        try{
            return view('real-estate::sites.edit', compact('site', 'template', 'templates', 'domains', 'fields'));
        }catch(\Exception $e){
            return redirect()->route('dashboard.sites.index')->with('error', $e->getMessage());
        }
        
    }

    public function update(StoreSiteRequest $request, $id)
    {
        try{
            $data = $request->all();

            $site = $this->siteService->find($id);

            $this->siteService->update($id, $data);
            return redirect()->route('dashboard.sites.edit', $site->id)->with('success', 'Site criado com sucesso!');
        }catch(\Exception $e){
            return redirect()->route('dashboard.sites.edit', $site->id)->with('error', $e->getMessage());
        }
    }

}
