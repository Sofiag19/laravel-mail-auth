@extends('layouts.base')

@section('doctorList')

@foreach($doctors as $doctor)
<div>
  <h3>{{ $doctor -> Name }} {{ $doctor -> Lastname }} MD</h3>
  <a href="{{ route('doc.show', $doctor -> id) }}">VIEW</a>
  
</div>
@endforeach
<br>
@endsection