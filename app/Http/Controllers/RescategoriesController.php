<?php

namespace App\Http\Controllers;
use App\Models\Res_Info_Category;
use App\Models\Res_Info_Article;
use App\Models\Res_Info_Tag;

use Illuminate\Http\Request;

class RescategoriesController extends Controller
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
        $rescategory = Res_Info_Category::find($id);
        $resarticle = Res_Info_Article::all()->where('cat_id',$id);
        $recentarticle = Res_Info_Article::latest('created_at')->limit(4)->get();
        $restags = Res_Info_Tag::all();
        return view('platform.rescategory', compact('rescategory','resarticle','recentarticle','restags'));
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
