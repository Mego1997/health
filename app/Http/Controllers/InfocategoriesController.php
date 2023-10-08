<?php

namespace App\Http\Controllers;
use App\Models\He_Info_Category;
use App\Models\He_Info_Article;
use App\Models\He_Info_Tag;
use Illuminate\Http\Request;

class InfocategoriesController extends Controller
{

    public function index()
    {
        
    }


    public function create()
    {
        
    }


    public function store(Request $request)
    {
       
    }


    public function show($id)
    {
        $infocategory = He_Info_Category::find($id);
        $infoarticle = He_Info_Article::all()->where('cat_id',$id);
        $recentarticle = He_Info_Article::latest('created_at')->limit(4)->get();
        $infotags = He_Info_Tag::all();
        return view('platform.infocategory', compact('infocategory','infoarticle','recentarticle','infotags'));
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
