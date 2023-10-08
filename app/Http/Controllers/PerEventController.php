<?php

namespace App\Http\Controllers;

use App\Models\Per_Event;
use App\Models\Per_Event_Category;
use App\Models\Per_Event_Section;
use App\Models\Per_Photogallery;
use App\Models\Per_Videogallery;
use Illuminate\Http\Request;

class PerEventController extends Controller
{

    public function index()
    {
        $per_events = Per_Event::all();
        return view('manager_dashboard.events.per_events.index',compact('per_events'));
    }


    public function create()
    {
        $per_events = Per_Event::all();
        return view('manager_dashboard.events.per_events.create',compact('per_events'));
    }


    public function store(Request $request)
    {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('events'), $imageName);
        $event = new Per_Event;
        $event->name = $request->name;
        $event->body = $request->body;
        $event->image = $imageName;
        $event->save();


        foreach ($request->file('images') as $imagefile) {
            $imagesName = time().rand(1,50).'.'.$imagefile->extension();
            $imagefile->move(public_path('events_imagesgallery'), $imagesName);
            $images = new Per_Photogallery;
            $images->image = $imagesName;
            $images->event_id = $event->id;
            $images->save();

        }

        foreach ($request->file('videos') as $videofile) {
            $videoName = time().rand(51,100).'.'.$videofile->extension();
            $videofile->move(public_path('events_videosgallery'), $videoName);
            $videos = new Per_Videogallery;
            $videos->video = $videoName;
            $videos->event_id = $event->id;
            $videos->save();

        }

        return redirect()->route('manager_dashboard.events.per_events.index')->with('message' , "تم إضافة الفعالية ");
    }

    public function show(Per_Event $per_Event)
    {
        //
    }


    public function edit($id)
    {
        $per_events = Per_Event::find($id);
        return view('manager_dashboard.events.per_events.edit' , compact('per_events'));

    }


    public function update(Request $request, $id)
    {
        $per_events = Per_Event::find($id);

        if($request->hasFile('image')){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('events'), $imageName);
        }else{
            $imageName = $per_events->image;
        }

        $per_events->name = $request->name;
        $per_events->body = $request->body;
        $per_events->image = $imageName;

        $per_events->save();
        return redirect()->route('manager_dashboard.events.per_events.index')->with('message' , " تم التحديث بنجاح ");

    }


    public function destroy($id)
    {
        $per_events = Per_Event::find($id)->delete();
        return redirect()->route('manager_dashboard.events.per_events.index')->with('message' , "تم إزالة  الفعالية");

    }
}
