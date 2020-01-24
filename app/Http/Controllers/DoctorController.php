<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\Http\Requests\DoctorRequest;

class DoctorController extends Controller
{
    public function index(){

        $doctors = Doctor::all();
        //dd($doctors);
        return view('pages.doctorList', compact('doctors'));
    }

    public function show($id) {
        $doctor = Doctor::findOrFail($id);

        //dd($doctor);
        return view('pages.doctorShow', compact('doctor'));
    }

    public function createDoc(){
        return view('pages.createNewDoc');
    }

    public function storeDoc(DoctorRequest $request)
    {
       $validatedData = $request -> validated();
       $newDoc = Doctor::create($validatedData);
       return redirect()-> route('doc.index');
    }

    public function editDoc($id)
    {
        $doctor = Doctor::findOrFail($id);

        //dd($doctor);
        return view('pages.EditDoctor', compact('doctor'));
    }

    public function updateDoc(DoctorRequest $request, $id)
    {
        //dd($id);
        $validatedData = $request->validated();
        $newDoc = Doctor::findOrFail($id);
        //dd($newDoc);
        $newDoc -> update($validatedData);
        return redirect()->route('doc.index', compact('newDoc'));
    }

    public function destroyDoctor($id)
    {
        $doctor = Doctor::findOrFail($id);
        $doctor -> patients() -> delete();
        $doctor -> delete();
        return redirect()-> route('doc.index');
    }
}
