@extends('layouts.base')

@section('docPatients')
<div>
  <h1> {{ $doctor -> Name}} {{ $doctor -> Lastname }} MD</h1>
  <p> SPECIALIZATION: {{ $doctor -> Specialization }} </p>
  <p> DATE OF BIRTH : {{ $doctor -> DayOfBirth}} </p>
  <p> CONTACT: {{ $doctor -> Mail}}</p>
</div>

<h2>PATIENTS OF {{ $doctor -> Name}} {{ $doctor -> Lastname }} MD</h2>
<div>
  <a href="">ADD NEW PATIENT</a>
  <a href="">EDITE PATIENT</a>
  <a href="">DISMISS PATIENT</a>
</div>
@foreach ($doctor -> patients as $patient)
<p>PATIENT'S NAME: {{ $patient -> Name }} {{ $patient -> Lastname }}</p>
<p>DISEASE: {{ $patient -> Disease }}</p>
<P>DATE OF BIRTH: {{ $patient -> DayOfBirth }}</P>
<p>CONTACT: {{ $patient -> Mail }}</p>
<br>
@endforeach


@endsection