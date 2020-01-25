@extends('layouts.base')

@section('doctorList')
<div><a href="{{ route('doc.create') }}">ADD NEW MD</a></div>
<br> <br>
@foreach($doctors as $doctor)
<div>
  <h3>{{ $doctor -> Name }} {{ $doctor -> Lastname }} MD</h3>
  <a href="{{ route('doc.show', $doctor -> id) }}">VIEW</a>
  <a href="{{ route('doc.edit', $doctor -> id) }}">EDIT</a>
  <a href="{{ route('doc.delete', $doctor -> id) }}">DELETE</a>
</div>
@endforeach
<br>
@endsection