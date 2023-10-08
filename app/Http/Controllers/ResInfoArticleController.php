<?php

namespace App\Http\Controllers;

use App\Models\Res_Info_Article;
use App\Models\Res_Info_Category;
use App\Models\Res_Info_Tag;
use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Http\Requests\InfoArticleRequest;

class ResInfoArticleController extends Controller
{
    public function index()
    {
        $res_articles = Res_Info_Article::all();
        return view('manager_dashboard.healthy.res_info_articles.index', compact('res_articles'));
    }


    public function create()
    {
        $res_articles = Res_Info_Article::all();
        $res_categories = Res_Info_Category::all();
        $res_tags = Res_Info_Tag::all();
        $doctors = Doctor::all();
        return view('manager_dashboard.healthy.res_info_articles.create' ,compact('res_articles' ,'res_categories', 'res_tags', 'doctors'));
    }


    public function store(InfoArticleRequest $request)
    {

        $imageName = time().'.'.$request->article_image->extension();
        $request->article_image->move(public_path('res_articles'), $imageName);

        Res_Info_Article::create([
            'article_name' => $request->article_name,
            'article_body' => $request->article_body,
            'cat_id' => $request->cat_id,
            'tag_id' => $request->tag_id,
            'doc_id' => $request->doc_id,
            'article_image' => $imageName,
        ]);
        return redirect()->route('manager_dashboard.healthy.res_info_articles.index')->with('message' , "تم إضافة الوصفة بنجاح");

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $res_articles = Res_Info_Article::find($id);
        $res_categories = Res_Info_Category::all();
        $res_tags = Res_Info_Tag::all();
        $doctors = Doctor::all();
        return view('manager_dashboard.healthy.res_info_articles.edit' , compact('res_articles' ,'res_categories', 'res_tags', 'doctors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $res_articles = Res_Info_Article::find($id);


        if($request->hasFile('article_image')){
            $imageName = time().'.'.$request->article_image->extension();
            $request->article_image->move(public_path('res_articles'), $imageName);
        }else{
            $imageName = $res_articles->article_image;
        }

        $res_articles->article_name = $request->article_name;
        $res_articles->article_body = $request->article_body;
        $res_articles->cat_id = $request->cat_id;
        $res_articles->tag_id = $request->tag_id;
        $res_articles->article_image = $imageName;

        $res_articles->save();
        return redirect()->route('manager_dashboard.healthy.res_info_articles.index')->with('message' , " تم التحديث بنجاح ");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $info_articles = Res_Info_Article::find($id)->delete();
        return redirect()->route('manager_dashboard.healthy.res_info_articles.index')->with('message' , "تم إزالة الوصفة بنجاح");
    }
}
