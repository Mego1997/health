<?php

namespace App\Http\Controllers;

use App\Models\Res_Info_Category;
use Illuminate\Http\Request;
use App\Http\Requests\InfoCategoryeRequest;


class ResInfoCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $res_categories = Res_Info_Category::all();
        return view('manager_dashboard.healthy.res_info_categories.index',compact('res_categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $res_categories = Res_Info_Category::all();
        return view('manager_dashboard.healthy.res_info_categories.create' ,compact('res_categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InfoCategoryeRequest $request)
    {

        $imageName = time().'.'.$request->cat_image->extension();
        $request->cat_image->move(public_path('res_categories'), $imageName);

        Res_Info_Category::create([
            'cat_name' => $request->cat_name,
            'cat_image' => $imageName,
        ]);
        return redirect()->route('manager_dashboard.healthy.res_info_categories.index')->with('message' , "تم إضافة نوع الوصفة بنجاح");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $res_categories = Res_Info_Category::find($id);
        return view('manager_dashboard.healthy.res_info_categories.edit' , compact('res_categories'));
    }


    public function update(Request $request, $id)
    {

        $res_categories = Res_Info_Category::find($id);

        if($request->hasFile('cat_image')){
            $imageName = time().'.'.$request->cat_image->extension();
            $request->cat_image->move(public_path('res_categories'), $imageName);
        }else{
            $imageName = $res_categories->cat_image;
        }

        $res_categories->cat_name = $request->cat_name;
        $res_categories->cat_image = $imageName;

        $res_categories->save();
        return redirect()->route('manager_dashboard.healthy.res_info_categories.index')->with('message' , " تم التحديث بنجاح ");
    }


    public function destroy($id)
    {
        $res_categories = Res_Info_Category::find($id)->delete();
        return redirect()->route('manager_dashboard.healthy.res_info_categories.index')->with('message' , "تم إزالة نوع الوصفة بنجاح");
    }
}
