@extends('welcome')
@section('content')
    <h5 class="text-center">Registration update form</h5>
    <form action="{{route('student.update',$student->id)}}" class="form" method="post">
        @csrf
        <div>
            <label for="name"> Student Name</label>
            <input type="text" class="form-control" name="name" value="{{ $student->name }}">

        </div>
        <label for="Father_Name">Father's Name</label>
        <input type="text" class="form-control" name="father_name" value="{{ $student->father_name }}">
        <label for="Address">Address</label>
        <input type="text" class="form-control" name="address" value="{{ $student->address }}">
        <label for="Email">Email</label>
        <input type="email" class="form-control" name="email" value="{{ $student->email }}">
        <label for="Phone">Phone</label>
        <input type="number" class="form-control" name="phone_number" value="{{ $student->phone_number }}">
        <label for="Class">Class</label>
        <input type="text" class="form-control" name="class" value="{{  $student->class}}">
        <br>
        <button CLASS="btn btn-primary" type="submit">update Student Data</button>   </form>
@endsection


