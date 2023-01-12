@extends('welcome')
@section('content')
    <h5 class="text-center"> School Registration Form</h5>
    <form action="{{ route('school.update',$school->id) }}" class="form" method="post">
        @csrf
        <label for="name"> School Name</label>
        <input type="text" class="form-control" name="name" value="{{ $school->name }}">
        <label for="school_name">school name</label>
        <input type="text" class="form-control" name="school_name" value="{{ $school->school_name }}">
        <label for="school_Address">school Address</label>
        <input type="text" class="form-control" name="school_address" value="{{ $school->school_address }}">
        <label for="Email">Email</label>
        <input type="email" class="form-control" name="email"value="{{ $school->email }}">
        <label for="school_Phone_number">school Phone number</label>
        <input type="number" class="form-control" name="school_Phone_number" value="{{ $school->school_Phone_number }}">
        <br>
        <button CLASS="btn btn-primary" type="submit">update school Data</button>   </form>
@endsection


