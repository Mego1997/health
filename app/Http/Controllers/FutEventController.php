<?php

namespace App\Http\Controllers;

use App\Models\Fut_Event;
use App\Models\Fut_Photogallery;
use App\Models\Fut_Videogallery;
use Illuminate\Http\Request;

class FutEventController extends Controller
{
    public function index()
    {
        $fut_events = Fut_Event::all();
        return view('manager_dashboard.events.fut_events.index',compact('fut_events'));
    }


    public function create()
    {
        $fut_events = Fut_Event::all();
        return view('manager_dashboard.events.fut_events.create',compact('fut_events'));
    }


    public function store(Request $request)
    {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('fut_events'), $imageName);
        $event = new Fut_Event;
        $event->name = $request->name;
        $event->body = $request->body;
        $event->image = $imageName;
        $event->save();


        foreach ($request->file('images') as $imagefile) {
            $imagesName = time().rand(1,50).'.'.$imagefile->extension();
            $imagefile->move(public_path('fut_events_imagesgallery'), $imagesName);
            $images = new Fut_Photogallery;
            $images->image = $imagesName;
            $images->event_id = $event->id;
            $images->save();

        }

        foreach ($request->file('videos') as $videofile) {
            $videoName = time().rand(51,100).'.'.$videofile->extension();
            $videofile->move(public_path('fut_events_videosgallery'), $videoName);
            $videos = new Fut_Videogallery;
            $videos->video = $videoName;
            $videos->event_id = $event->id;
            $videos->save();

        }

        return redirect()->route('manager_dashboard.events.fut_events.index')->with('message' , "تم إضافة الفعالية ");

    }


    public function show(Fut_Event $fut_Event)
    {
        //
    }


    public function edit($id)
    {
        $fut_events = Fut_Event::find($id);
        return view('manager_dashboard.events.fut_events.edit' , compact('fut_events'));

    }


    public function update(Request $request, $id)
    {
        $fut_events = Fut_Event::find($id);

        if($request->hasFile('image')){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('fut_events'), $imageName);
        }else{
            $imageName = $fut_events->image;
        }

        $fut_events->name = $request->name;
        $fut_events->body = $request->body;
        $fut_events->image = $imageName;

        $fut_events->save();
        return redirect()->route('manager_dashboard.events.fut_events.index')->with('message' , " تم التحديث بنجاح ");

    }


    public function destroy($id)
    {
        $fut_events = Fut_Event::find($id)->delete();
        return redirect()->route('manager_dashboard.events.fut_events.index')->with('message' , "تم إزالة  الفعالية");

    }
}
