<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use App\Models\Tag;

class AdminController extends Controller
{
    public function index(){
        $ideas = Idea::all();
        $tags = Tag::all();
        return view('admin.home', compact('ideas'), compact('tags'));
    }

    public function toggle(Idea $idea){
        $idea -> active = !$idea -> active;
        $idea -> save();

        return redirect(route('admin'));
    }
}
