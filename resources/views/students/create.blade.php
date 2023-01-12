@extends('welcome')
@section('content')
    <h5 class="text-center">Registration Form</h5>
    <form action="{{ route('student.store') }}" class="form" method="post">
        @csrf
        <div>
            <label for="name"> Student Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
            @if ($errors->has('name'))
                <span class="text text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>
        <div>
            <label for="Father_Name">Father's Name</label>
            <input type="text" class="form-control @error('father_name') is-invalid @enderror" name="father_name">
            @if ($errors->has('father_name'))
                <span class="text text-danger">{{ $errors->first('father_name') }}</span>
            @endif
        </div>
<div>
    <label for="Address">Address</label>
    <input type="text" class="form-control @error('address') is-invalid @enderror" name=" address">
    @if ($errors->has('address'))
        <span class="text text-danger">{{ $errors->first('address') }}</span>
    @endif
</div>

       <div>
           <label for="Email">Email</label>
           <input type="email" class="form-control @error('email') is-invalid @enderror" name="email">
                @if ($errors->has('email'))
                    <span class="text text-danger">{{ $errors->first('email') }}</span>
                @endif
       </div>
        <div>
            <label for="Phone">Phone</label>
            <input type="number" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number">
            @if ($errors->has('phone_number'))
                <span class="text text-danger">{{ $errors->first('phone_number') }}</span>
            @endif
        </div>

        <div>
            <label for="Class">Class</label>
            <input type="text" class="form-control @error('class') is-invalid @enderror" name="class">
            @if ($errors->has('class'))
                <span class="text text-danger">{{ $errors->first('class') }}</span>
            @endif
        </div>

        <br>
        <button CLASS="btn btn-primary" type="submit">Upload Student Data</button>   </form>

@endsection
