@extends('welcome')
@section('content')
    <h5 class="text-center"> School Registration Form</h5>
    <form action="{{ route('school.store') }}" class="form" method="post">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
            @if ($errors->has('name'))
                <span class="text text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>
        <div>
            <label for="school_name">school name</label>
            <input type="text" class="form-control" name="school_name">
            @if ($errors->has('school_name'))
                <span class="text text-danger">{{ $errors->first('school_name') }}</span>
            @endif
        </div>
        <div>
            <label for="school_Address">school Address</label>
            <input type="text" class="form-control" name="school_address">
            @if ($errors->has('school_address'))
                <span class="text text-danger">{{ $errors->first('school_address') }}</span>
            @endif
        </div>

        <div>
            <label for="Email">Email</label>
            <input type="email" class="form-control" name="email">
            @if ($errors->has('email'))
                <span class="text text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>
       <div>
           <label for="school_Phone_number">school Phone number</label>
           <input type="number" class="form-control" name="school_Phone_number">
           @if ($errors->has('school_Phone_number'))
               <span class="text text-danger">{{ $errors->first('school_Phone_number') }}</span>
           @endif

       </div>

        <br>
        <button CLASS="btn btn-primary" type="submit">Upload school Data</button>

    </form>
@endsection
