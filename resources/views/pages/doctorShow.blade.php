@extends('layouts.base')

@section('doctor')
<div>
  <h1> {{ $doctor -> Name}} {{ $doctor -> Lastname }} MD</h1>
  <p> SPECIALIZATION: {{ $doctor -> Specialization }} </p>
  <p> DATE OF BIRTH : {{ $doctor -> DateOfBirth}} </p>
  <p> CONTACT: {{ $doctor -> Mail}}</p>
</div>

<h2>PATIENTS OF {{ $doctor -> Name}} {{ $doctor -> Lastname }} MD</h2>

@foreach($doctor -> patients as $patient)
<div>
  <h3>NOME E COGNOME PAZIENTE {{ $patient -> Name}} {{ $patient -> Lastname }}</h3>
  <p>MALATTIA</p>
  <p>DATA DI NASCITA</p>
  <p>CONTATTI --> MAIL</p>

</div>
@endforeach

@endsection