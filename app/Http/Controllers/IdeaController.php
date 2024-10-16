<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {

        $characters = Idea::all();
        return view('ideaView', ['characters' => $characters]);
    }

    public function create() {
        return view('idea.create');
    }

    public function store(Request $request){
        $character = new Idea();

        $character -> name = $request->input('name');
        $character -> idea = $request->input('idea');

        $character -> save();
        return redirect() -> route('ideas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Idea $idea){
        $idea = Idea::find($idea->id);
        return view('idea.show', ['idea' => $idea]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Idea $idea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Idea $idea)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Idea $idea) {
        $idea -> delete();
        return redirect() -> route('ideas.index');
    }
}
