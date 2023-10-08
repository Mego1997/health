<?php

namespace App\Http\Controllers;

use App\Models\Non_Event;
use App\Models\Non_Photogallery;
use App\Models\Non_Videogallery;
use Illuminate\Http\Request;

class NonEventController extends Controller
{

    public function index()
    {
        $non_events = Non_Event::all();
        return view('manager_dashboard.events.non_events.index',compact('non_events'));
    }


    public function create()
    {
        $non_events = Non_Event::all();
        return view('manager_dashboard.events.non_events.create',compact('non_events'));
    }


    public function store(Request $request)
    {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('events'), $imageName);
        $event = new Non_Event;
        $event->name = $request->name;
        $event->body = $request->body;
        $event->image = $imageName;
        $event->save();


        foreach ($request->file('images') as $imagefile) {
            $imagesName = time().rand(1,50).'.'.$imagefile->extension();
            $imagefile->move(public_path('non_events_imagesgallery'), $imagesName);
            $images = new Non_Photogallery;
            $images->image = $imagesName;
            $images->event_id = $event->id;
            $images->save();

        }

        foreach ($request->file('videos') as $videofile) {
            $videoName = time().rand(51,100).'.'.$videofile->extension();
            $videofile->move(public_path('non_events_videosgallery'), $videoName);
            $videos = new Non_Videogallery;
            $videos->video = $videoName;
            $videos->event_id = $event->id;
            $videos->save();

        }

        return redirect()->route('manager_dashboard.events.non_events.index')->with('message' , "تم إضافة الفعالية ");

    }


    public function show(Non_Event $non_Event)
    {
        //
    }


    public function edit($id)
    {
        $non_events = Non_Event::find($id);
        return view('manager_dashboard.events.non_events.edit' , compact('non_events'));

    }


    public function update(Request $request, $id)
    {
        $non_events = Non_Event::find($id);

        if($request->hasFile('image')){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('non_events'), $imageName);
        }else{
            $imageName = $non_events->image;
        }

        $non_events->name = $request->name;
        $non_events->body = $request->body;
        $non_events->image = $imageName;

        $non_events->save();
        return redirect()->route('manager_dashboard.events.non_events.index')->with('message' , " تم التحديث بنجاح ");

    }


    public function destroy($id)
    {
        $non_events = Non_Event::find($id)->delete();
        return redirect()->route('manager_dashboard.events.non_events.index')->with('message' , "تم إزالة  الفعالية");

    }
}
