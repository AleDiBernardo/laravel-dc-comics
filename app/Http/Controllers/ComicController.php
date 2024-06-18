<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comicsList = Comic::all();
        return view('comics.index', compact('comicsList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $comics = new Comic();
        $comics->fill($data);
        $comics->save();
        return redirect()->route("comics.show", ["comic" => $comics->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        // $request->validate([
        //     'title' => 'required|max:255',
        //     'description' => 'required',
        //     'thumb' => 'required|url',
        //     'price' => 'required|numeric',
        //     'series' => 'required|max:255',
        //     'sale_date' => 'required|date',
        //     'type' => 'required|max:255',
        // ]);

        // $comic = Comic::findOrFail($id);
        $data = $request->all();
        $comic->update($data);
        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
