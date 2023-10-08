<?php

namespace App\Http\Controllers;
use App\Models\He_Info_Tag;
use App\Models\Per_Event;
use App\Models\Per_Event_Category;
use App\Models\Per_Event_Section;
use Illuminate\Http\Request;

class ShoweventController extends Controller
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
        $per_categories = Per_Event_Category::find($id);
        $per_events = Per_Event::all()->where('cat_id',$id);
        $recent_events = Per_Event::latest('created_at')->limit(4)->get();
        return view('platform.per_events.events', compact('per_events','per_categories','recent_events'));
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
