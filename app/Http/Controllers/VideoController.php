<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Video_Category;
use Illuminate\Http\Request;

class VideoController extends Controller
{

    public function index()
    {
        $videos = Video::all();
        return view('manager_dashboard.healthy.videos.index', compact('videos'));
    }


    public function create()
    {

        $videos = Video::all();
        $videos_categories = Video_Category::all();
        return view('manager_dashboard.healthy.videos.create' ,compact('videos' ,'videos_categories'));
    }


    public function store(Request $request)
    {

        $imageName = time().'.'.$request->vid_image->extension();
        $request->vid_image->move(public_path('videos'), $imageName);

        Video::create([
            'vid_name' => $request->vid_name,
            'vid_description' => $request->vid_description,
            'cat_id' => $request->cat_id,
            'vid_url' => $request->vid_url,
            'vid_image' => $imageName,
        ]);
        return redirect()->route('manager_dashboard.healthy.videos.index')->with('message' , "تم إضافة الفيديو بنجاح");
    }


    public function show(Video $video)
    {
        //
    }


    public function edit($id)
    {
        $videos = Video::find($id);
        $videos_categories = Video_Category::all();
        return view('manager_dashboard.healthy.videos.edit' , compact('videos' ,'videos_categories'));
    }


    public function update(Request $request, $id)
    {

        $videos = Video::find($id);



        if($request->hasFile('vid_image')){
            $imageName = time().'.'.$request->vid_image->extension();
            $request->vid_image->move(public_path('videos'), $imageName);
        }else{
            $imageName = $videos->vid_image;
        }

        $videos->vid_name = $request->vid_name;
        $videos->vid_description = $request->vid_description;
        $videos->cat_id = $request->cat_id;
        $videos->vid_url = $request->vid_url;
        $videos->vid_image = $imageName;

        $videos->save();
        return redirect()->route('manager_dashboard.healthy.videos.index')->with('message' , " تم التحديث بنجاح ");
    }


    public function destroy($id)
    {
        $videos = Video::find($id)->delete();
        return redirect()->route('manager_dashboard.healthy.videos.index')->with('message' , "تم إزالة الفيديو بنجاح");
    }
}
