<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $songs = Song::all();
        return view('songs', compact('songs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('songs.create');
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
            'title' => 'required|string',
            'album' => 'required|string',
            'author' => 'required|string',
            'editor' => 'required|string',
            'length' => 'required|numeric',
            'poster' => 'required|string',
        ]);

        $data = $request->all();
        
        $new_song = new Song();
        $new_song->fill($data);

        $new_song->save();
        return redirect()->route('songs.show', $new_song->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Song $song)
    {
        return view('songs.show', compact('song'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Song $song)
    {
        return view('songs.edit', compact('song'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Song $song)
    {
        $request->validate([
            'title' => 'required|string',
            'album' => 'required|string',
            'author' => 'required|string',
            'editor' => 'required|string',
            'length' => 'required|numeric',
            'poster' => 'required|string',
        ]);

        $data = $request->all();

        $song->fill($data);
        // dd($song);
        $song->save();

        return redirect()->route('songs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Song::destroy($id);

        return redirect()->route('songs.index');
    }
}
