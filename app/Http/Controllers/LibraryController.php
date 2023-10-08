<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Http\Request;
use App\Http\Requests\LibraryRequest;

class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libraries = Library::all();
        return view('manager_dashboard.libraries.index', compact('libraries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $libraries = Library::all();
        return view('manager_dashboard.libraries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LibraryRequest $request)
    {
        Library::create([
            'library_name' => $request->library_name,
            'href_name' => $request->href_name,
        ]);
        return redirect()->route('manager_dashboard.libraries.index')->with('message' , "تم إضافة المكتبة بنجاح");
    }

    /**
     * Display the specified resource.
     */
    public function show(Library $library)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $libraries = Library::find($id);
        return view('manager_dashboard.libraries.edit' , compact('libraries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $library = Library::find($id);
        $library->library_name = $request->library_name;
        $library->href_name = $request->href_name;

        $library->save();
        return redirect()->route('manager_dashboard.libraries.index')->with('message' , " تم التحديث بنجاح ");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $library = Library::find($id)->delete();
        return redirect()->route('manager_dashboard.libraries.index')->with('message' , "تم إزالة المكتبة بنجاح");
    }
}
