@extends('welcome')
@section('content')
    <h5 class="text-center">All Schools in DATA Base</h5>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">School Name</th>
            <th scope="col">email</th>
            <th scope="col">school_address</th>
            <th scope="col">school_phone number</th>
            <th scope="col">school_class</th>
        </tr>
        </thead>
        @foreach($schools as $school)
        <tbody>

            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $school->name }}</td>
                <td>{{ $school->school_name }}</td>
                <td>{{ $school->email }}</td>
                <td>{{ $school->school_address }}</td>
                <td>{{ $school->school_phone_number }}</td>
                <td>{{ $school->school_class }}</td>
                <td><a href="{{ route('school.delete',$school->id ) }}" CLASS="btn btn-danger">Delete School</a></td>
                <td><a href="{{ route('school.Edite',$school->id ) }}" CLASS="btn btn-primary">Edite School</a></td>

            </tr>

        </tbody>
        @endforeach
    </table>

@endsection
