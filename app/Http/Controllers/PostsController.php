<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //
    public function create()
    {
        return view('posts/create');
    }

    public function store()
    {
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required','image']
        ]);
        $data['image'] = request('image')->store('uploads','public');
        // dd($data);
        auth()->user()->posts()->create($data);

        // \App\Post::create($data);
        // dd(request()->all());
        // return redirect()->route("/profile/" , auth()->user->()->id);
        $id = auth()->user()->id;
        return redirect('/profile/'. $id);
    }
}
