<?php

namespace App\Http\Controllers;

use App\Models\Res_Info_Tag;
use App\Models\Video;
use App\Models\Video_Category;
use Illuminate\Http\Request;

class VideocategoriesController extends Controller
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
        $videoscategory = Video_Category::find($id);
        $videos = Video::all()->where('cat_id',$id);
        $recentvideos = Video::latest('created_at')->limit(4)->get();
        $restags = Res_Info_Tag::all();
        return view('platform.videoscategory', compact('videoscategory','videos','recentvideos','restags'));
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
