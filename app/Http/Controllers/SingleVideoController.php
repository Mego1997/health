<?php

namespace App\Http\Controllers;

use App\Models\He_Info_Tag;
use App\Models\Video;
use App\Models\Video_Comment;
use Illuminate\Http\Request;

class SingleVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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

        $videos = Video::find($id);
        $recentvideos = Video::latest('created_at')->limit(4)->get();
        $infotags = He_Info_Tag::all();
        $videocomments = Video_Comment::all()->where('vid_id',$id);



        
        return view('platform.singlevideo',compact('videos','recentvideos','infotags','videocomments'));
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
