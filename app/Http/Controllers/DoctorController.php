<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Http\Requests\DoctorRequest;

class DoctorController extends Controller
{

    public function index()
    {
        $doctors = Doctor::all();
        return view('doctors.index', compact('doctors'));
    }


    public function create()
    {
        $doctors = Doctor::all();
        return view('doctors.create');
    }


    public function store(DoctorRequest $request)
    {
        // $input = $request->all();
        // Doctor::create($input);
        // return redirect()->route('doctors.index')->with('message' , "تم إضافة الطبيب بنجاح");

        $imageName = time().'.'.$request->doc_image->extension();
        $request->doc_image->move(public_path('doctors'), $imageName);

        Doctor::create([
            'doc_name' => $request->doc_name,
            'doc_spec' => $request->doc_spec,
            'doc_address' => $request->doc_address,
            'doc_phone' => $request->doc_phone,
            'doc_mail' => $request->doc_mail,
            'doc_summary' => $request->doc_summary,
            'doc_exp' => $request->doc_exp,
            'doc_skills' => $request->doc_skills,
            'doc_edu' => $request->doc_edu,
            'doc_image' => $imageName,
        ]);
        return redirect()->route('doctors.index')->with('message' , "تم إضافة الطبيب بنجاح");

    }


    public function show($id)
    {
        $doctor = Doctor::find($id);
        return view('doctors.show', compact('doctor'));
    }


    public function edit($id)
    {
        $doctor = Doctor::find($id);
        return view('doctors.edit' , compact('doctor'));
    }


    public function update(Request $request, $id)
    {

        $doctor = Doctor::find($id);


        if($request->hasFile('doc_image')){
            $imageName = time().'.'.$request->doc_image->extension();
            $request->doc_image->move(public_path('doctors'), $imageName);
        }else{
            $imageName = $doctor->doc_image;
        }

        $doctor->doc_name = $request->doc_name;
        $doctor->doc_spec = $request->doc_spec;
        $doctor->doc_address = $request->doc_address;
        $doctor->doc_phone = $request->doc_phone;
        $doctor->doc_mail = $request->doc_mail;
        $doctor->doc_summary = $request->doc_summary;
        $doctor->doc_exp = $request->doc_exp;
        $doctor->doc_skills = $request->doc_skills;
        $doctor->doc_edu = $request->doc_edu;
        $doctor->doc_image = $imageName;

        $doctor->save();
        return redirect()->route('doctors.index')->with('message' , " تم التحديث بنجاح ");
    }


    public function destroy($id)
    {
        $doctor = Doctor::find($id)->delete();
        return redirect()->route('doctors.index')->with('message' , "تم إزالة الطبيب بنجاح");
    }
}
