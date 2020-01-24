@extends('layouts.base')

@section('docCreate')
<form action=" {{ route('doc.store') }} " method="post">
  @csrf
  @method('POST')
  <label for="Name">NAME</label>
  <br>
  <input type="text" name="Name" placeholder="Add Name">
  <br>
  <label for="Lastname">LASTNAME</label>
  <br>
  <input type="text" name="Lastname" placeholder="Add Lastname">
  <br>
  <label for="DayOfBirth">DAY OF BIRTH(YYYY-MM-DD)</label>
  <br>
  <input type="datetime" name="DayOfBirth" placeholder="Add Day of birth">
  <br>
  <label for="Specialization">SPECIALIZATION</label>
  <br>
  <input type="text" name="Specialization" placeholder="Add Specialization">
  <br>
  <label for="Mail">MAIL</label>
  <br>
  <input type="email" name="Mail" placeholder="Add Mail">
  <br> <br>
  <button type="submit">ADD</button>
</form>
@endsection