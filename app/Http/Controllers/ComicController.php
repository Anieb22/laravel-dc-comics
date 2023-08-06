<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'         => 'required|min:4|max:255',
            'description'   => 'min:10',
            'thumb'         => 'required|min:5',
            'price'         => 'required|min:3|max:255',
            'series'        => 'min:3|max:255',
            'type'          => 'min:3|max:255',
            'artists'       => 'min:3|max:255',
            'writers'       => 'min:3|max:255',
        ]);

        $form_data = $request->all();

        $comic = new Comic();
        $comic->title = $form_data['title'];
        $comic->series = $form_data['series'];
        $comic->price = $form_data['price'];
        $comic->type = $form_data['type'];
        $comic->thumb = $form_data['thumb'];
        $comic->artists = $form_data['artists'];
        $comic->writers = $form_data['writers'];
        $comic->description = $form_data['description'];
        
        
        $comic->save();

        return redirect()->route('comics.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate([
            'title'         => 'required|min:4|max:255',
            'description'   => 'min:10',
            'thumb'         => 'required|min:5',
            'price'         => 'required|min:3|max:255',
            'series'        => 'min:3|max:255',
            'type'          => 'min:3|max:255',
            'artists'       => 'min:3|max:255',
            'writers'       => 'min:3|max:255',
        ]);
        
        $form_data=$request->all();
        $comic->update($form_data);

        return redirect()->route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
