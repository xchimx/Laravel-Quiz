<?php

namespace App\Http\Controllers;

use App\Models\Highscore;
use App\Http\Requests\StoreHighscoreRequest;
use App\Http\Requests\UpdateHighscoreRequest;

class HighscoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHighscoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHighscoreRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Highscore  $highscore
     * @return \Illuminate\Http\Response
     */
    public function show(Highscore $highscore)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Highscore  $highscore
     * @return \Illuminate\Http\Response
     */
    public function edit(Highscore $highscore)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHighscoreRequest  $request
     * @param  \App\Models\Highscore  $highscore
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHighscoreRequest $request, Highscore $highscore)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Highscore  $highscore
     * @return \Illuminate\Http\Response
     */
    public function destroy(Highscore $highscore)
    {
        //
    }
}
