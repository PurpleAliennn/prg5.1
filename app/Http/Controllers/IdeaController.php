<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use App\Models\Tag;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function index(Request $request) {

        $characters = Idea::all();
        $tags = Tag::all();

        if($request -> input('search') != null && $request -> input('search') != "") {
            $characters = Idea::where('name', 'like', '%'.$request -> input('search').'%')->orWhere('idea', 'like', '%'.$request -> input('search').'%')->get();
        }

        if($request -> input('filter') != null && $request -> input('filter') != "") {
            $characters = Idea::where('tag_id', 'like', $request -> input('filter'))->get();
        }

        return view('ideaView', ['characters' => $characters], ['tags' => $tags]);

    }

    public function create() {

        $tags = Tag::all();

        return view('idea.create', ['tags' => $tags]);
    }

    public function store(Request $request, Idea $idea) {

        $request->validate([
            'name' => 'required',
            'idea' => 'required',
        ],[
            'name.required' => 'A character needs a name',
            'idea.required' => 'You must describe your character',
        ]);

        $character = new Idea();

        $character -> name = $request->input('name');
        $character -> user_id = auth()->user()->id;
        $character -> idea = $request->input('idea');
        $character -> tag_id = $request->input('tag_id');

        $character -> save();
        return redirect() -> route('ideas.index');
    }

    public function show(Idea $idea, Tag $tag) {
        $idea = Idea::find($idea->id);
        $category = Tag::find($idea->tag_id);
        return view('idea.show', ['idea' => $idea], ['category' => $category]);
    }

    public function edit(Idea $idea) {

        $tags = Tag::all();

        return view('idea.edit', ['idea' => $idea], ['tags' => $tags]);
    }

    public function update(Request $request, Idea $idea) {

        $request->validate([
            'name' => 'required',
            'idea' => 'required',
        ],[
            'name.required' => 'A character needs a name',
            'idea.required' => 'You must describe your character',
        ]);

        $idea -> name = $request->input('name');
        $idea -> idea = $request->input('idea');
        $idea -> tag_id = $request->input('tag_id');

        $idea -> update();
        return redirect() -> route('ideas.index');
    }

    public function destroy(Idea $idea) {
        $idea -> delete();
        return redirect() -> route('ideas.index');
    }
}
