<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;

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
}
