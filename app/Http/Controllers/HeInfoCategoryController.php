<?php

namespace App\Http\Controllers;

use App\Models\He_Info_Category;
use Illuminate\Http\Request;
use App\Http\Requests\InfoCategoryeRequest;

class HeInfoCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $info_categories = He_Info_Category::all();
        return view('manager_dashboard.healthy.he_info_categories.index',compact('info_categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $info_categories = He_Info_Category::all();
        return view('manager_dashboard.healthy.he_info_categories.create' ,compact('info_categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InfoCategoryeRequest $request)
    {


        $imageName = time().'.'.$request->cat_image->extension();
        $request->cat_image->move(public_path('info_categories'), $imageName);

        He_Info_Category::create([
            'cat_name' => $request->cat_name,
            'cat_image' => $imageName,
        ]);
        return redirect()->route('manager_dashboard.healthy.he_info_categories.index')->with('message' , "تم إضافة نوع المقالة بنجاح");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $info_categories = He_Info_Category::find($id);
        return view('manager_dashboard.healthy.he_info_categories.edit' , compact('info_categories'));
    }


    public function update(Request $request, $id)
    {

        $info_categories = He_Info_Category::find($id);


        if($request->hasFile('cat_image')){
            $imageName = time().'.'.$request->cat_image->extension();
            $request->cat_image->move(public_path('info_categories'), $imageName);
        }else{
            $imageName = $info_categories->cat_image;
        }

        $info_categories->cat_name = $request->cat_name;
        $info_categories->cat_image = $imageName;

        $info_categories->save();
        return redirect()->route('manager_dashboard.healthy.he_info_categories.index')->with('message' , " تم التحديث بنجاح ");
    }


    public function destroy($id)
    {
        $info_categories = He_Info_Category::find($id)->delete();
        return redirect()->route('manager_dashboard.healthy.he_info_categories.index')->with('message' , "تم إزالة نوع المقالة بنجاح");
    }
}
