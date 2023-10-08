<?php

namespace App\Http\Controllers;

use App\Models\Video_Category;
use App\Http\Requests\InfoCategoryeRequest;

use Illuminate\Http\Request;

class VideoCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos_categories = Video_Category::all();
        return view('manager_dashboard.healthy.videos_categories.index',compact('videos_categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $videos_categories = Video_Category::all();
        return view('manager_dashboard.healthy.videos_categories.create' ,compact('videos_categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InfoCategoryeRequest $request)
    {
        $imageName = time().'.'.$request->cat_image->extension();
        $request->cat_image->move(public_path('videos_categories'), $imageName);

        Video_Category::create([
            'cat_name' => $request->cat_name,
            'cat_image' => $imageName,
        ]);
        return redirect()->route('manager_dashboard.healthy.videos_categories.index')->with('message' , "تم إضافة نوع الفيديو بنجاح");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $videos_categories = Video_Category::find($id);
        return view('manager_dashboard.healthy.videos_categories.edit' , compact('videos_categories'));
    }


    public function update(Request $request, $id)
    {

        $videos_categories = Video_Category::find($id);

        if($request->hasFile('cat_image')){
            $imageName = time().'.'.$request->cat_image->extension();
            $request->cat_image->move(public_path('videos_categories'), $imageName);
        }else{
            $imageName = $videos->vid_image;
        }

        $videos_categories->cat_name = $request->cat_name;
        $videos_categories->cat_image = $imageName;

        $videos_categories->save();
        return redirect()->route('manager_dashboard.healthy.videos_categories.index')->with('message' , " تم التحديث بنجاح ");
    }


    public function destroy($id)
    {
        $videos_categories = Video_Category::find($id)->delete();
        return redirect()->route('manager_dashboard.healthy.videos_categories.index')->with('message' , "تم إزالة نوع الفيديو بنجاح");
    }
}
