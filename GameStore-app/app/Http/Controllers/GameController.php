<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // paginate shows first 5 in list
        $games = Game::latest()->paginate(4);

        // will tell view what page we are on and what games are on display
        return view('games.index', compact('games'))->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('games.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the input
        $request->validate([
            'name' => 'required',
            'detail' => 'required'

        ]);
        

        // create new product in database
        Game::create($request->all());
        // redirect the user and send a message
        return redirect()->route('games.index')->with('success','Game has been successfully added, well done');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        //
        return view('games.show', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        //
        return view('games.edit', compact('game'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        //
        //validate the input
        $request->validate([
            'name' => 'required',
            'detail' => 'required'

        ]);
        

        // create new product in database
        $game->update($request->all());
        // redirect the user and send a message
        return redirect()->route('games.index')->with('success','Game has been successfully updated, well done');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        //delete the gamme
$game->delete();


        //redirect user
        return redirect()->route('games.index')->with('success','Game has been successfully deleted, well done');
        

    }
}
