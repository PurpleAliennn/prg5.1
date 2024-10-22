<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function index() {

        $characters = Idea::all();
        return view('ideaView', ['characters' => $characters]);
    }

    public function create() {
        return view('idea.create');
    }

    public function store(Request $request, Idea $idea) {
        $character = new Idea();

        $character -> name = $request->input('name');
        $character -> user_id = auth()->user()->id;
        $character -> idea = $request->input('idea');

        $character -> save();
        return redirect() -> route('ideas.index');
    }

    public function show(Idea $idea) {
        $idea = Idea::find($idea->id);
        return view('idea.show', ['idea' => $idea]);
    }

    public function edit(Idea $idea) {

        return view('idea.edit', ['idea' => $idea]);
    }

    public function update(Request $request, Idea $idea) {

        $idea -> name = $request->input('name');
        $idea -> idea = $request->input('idea');

        $idea -> update();
        return redirect() -> route('ideas.index');
    }

    public function destroy(Idea $idea) {
        $idea -> delete();
        return redirect() -> route('ideas.index');
    }
}
