<?php

namespace App\Http\Controllers;
use App\Models\He_Info_Category;
use App\Models\He_Info_Article;
use App\Models\He_Info_Tag;
use App\Models\He_Info_Comment;


use Illuminate\Http\Request;

class SinglePostController extends Controller
{
    
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $postarticles = He_Info_Article::find($id);
        $recentarticle = He_Info_Article::latest('created_at')->limit(4)->get();
        $postcomments = He_Info_Comment::all()->where('artical_id',$id);
        $infotags = He_Info_Tag::all();


        
        return view('platform.singlepost',compact('postarticles','postcomments','infotags','recentarticle'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
