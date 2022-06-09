<?php

namespace ConfrariaWeb\RealEstate\Controllers;

use App\Http\Controllers\Controller;
use ConfrariaWeb\Tag\Models\Tag;
use ConfrariaWeb\Tag\Requests\StoreTagRequest;
use ConfrariaWeb\Tag\Requests\UpdateTagRequest;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['tags'] = Tag::paginate(15);
        return view('real-estate::tags.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('real-estate::tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTagRequest $request)
    {
        Tag::create($request->all());
        return redirect()->route('dashboard.tags.index')->with('status', 'Tag criada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        $data['tag'] = Tag::find($tag);
        return view('real-estate::tags.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        return view('real-estate::tags.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTagRequest $request, Tag $tag)
    {
        //$tag = Tag::find($tag);
        $tag->update($request->all());
        return redirect()->route('dashboard.tags.index')->with('status', 'Tag editada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        $tag = Tag::find($tag);
        $tag->destroy($tag);
        return redirect()->route('dashboard.tags.index')->with('status', 'Tag editada com sucesso!');
    }
}
