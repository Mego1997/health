<?php

namespace App\Http\Controllers;
use App\Models\Non_Comment;
use App\Models\Non_Event;
use Illuminate\Http\Request;

class ShownoneventController extends Controller
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
        $non_event = Non_Event::find($id);
        $recent_events = Non_Event::latest('created_at')->limit(4)->get();
        $postcomments = Non_Comment::all()->where('event_id',$id);

        return view('platform.non_events.event', compact('non_event','recent_events' , 'postcomments'));
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
