<?php

namespace App\Http\Controllers;

use App\Models\He_Info_Article;
use App\Models\He_Info_Category;
use App\Models\He_Info_Tag;
use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Http\Requests\InfoArticleRequest;


class HeInfoArticleController extends Controller
{

    public function index()
    {
        $info_articles = He_Info_Article::all();
        return view('manager_dashboard.healthy.he_info_articles.index', compact('info_articles'));
    }


    public function create()
    {
        $info_articles = He_Info_Article::all();
        $info_categories = He_Info_Category::all();
        $info_tags = He_Info_Tag::all();
        $doctors = Doctor::all();
        return view('manager_dashboard.healthy.he_info_articles.create' ,compact('info_articles' ,'info_categories', 'info_tags', 'doctors'));
    }


    public function store(InfoArticleRequest $request)
    {
//        $path = $request->article_image->store('public/articles_img');

        $imageName = time().'.'.$request->article_image->extension();
        $request->article_image->move(public_path('info_articles'), $imageName);

        He_Info_Article::create([
            'article_name' => $request->article_name,
            'article_body' => $request->article_body,
            'cat_id' => $request->cat_id,
            'tag_id' => $request->tag_id,
            'doc_id' => $request->doc_id,
            'article_image' => $imageName,
        ]);
        return redirect()->route('manager_dashboard.healthy.he_info_articles.index')->with('message' , "تم إضافة المقالة بنجاح");

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $info_articles = He_Info_Article::find($id);
        $info_categories = He_Info_Category::all();
        $info_tags = He_Info_Tag::all();
        $doctors = Doctor::all();
        return view('manager_dashboard.healthy.he_info_articles.edit' , compact('info_articles' ,'info_categories', 'info_tags', 'doctors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $info_articles = He_Info_Article::find($id);


        if($request->hasFile('article_image')){
            $imageName = time().'.'.$request->article_image->extension();
            $request->article_image->move(public_path('info_articles'), $imageName);
        }else{
            $imageName = $info_articles->article_image;
        }

        $info_articles->article_name = $request->article_name;
        $info_articles->article_body = $request->article_body;
        $info_articles->cat_id = $request->cat_id;
        $info_articles->tag_id = $request->tag_id;
        $info_articles->article_image = $imageName;

        $info_articles->save();
        return redirect()->route('manager_dashboard.healthy.he_info_articles.index')->with('message' , " تم التحديث بنجاح ");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $info_articles = He_Info_Article::find($id)->delete();
        return redirect()->route('manager_dashboard.healthy.he_info_articles.index')->with('message' , "تم إزالة المقالة بنجاح");
    }
}
