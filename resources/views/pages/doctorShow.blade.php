@extends('layouts.base')

@section('doctor')
<a href=" {{ route('doc.index') }} ">HOME</a>
<div>
  <h1> {{ $doctor -> Name}} {{ $doctor -> Lastname }} MD</h1>
  <p> SPECIALIZATION: {{ $doctor -> Specialization }} </p>
  <p> DATE OF BIRTH : {{ $doctor -> DateOfBirth}} </p>
  <p> CONTACT: {{ $doctor -> Mail}}</p>
</div>

<h2>PATIENTS OF {{ $doctor -> Name}} {{ $doctor -> Lastname }} MD</h2>

@foreach ($doctor -> patients as $patient)
<p> {{ $patient -> Name }} {{ $patient -> Lastname }}</p>
<p>DISEASE: {{ $patient -> Disease }}</p>
<P>DATE OF BIRTH: {{ $patient -> DayOfBirth }}</P>
<p>CONTACT: {{ $patient -> Mail }}</p>
<br>
@endforeach


@endsection