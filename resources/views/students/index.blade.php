@extends('welcome')
@section('content')
    <h5 class="text-center">All Students in DATA Base</h5>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Father Name</th>
            <th scope="col">email</th>
            <th scope="col">address</th>
            <th scope="col">phone number</th>
            <th scope="col">class</th>
            <th scope="col">action</th>
        </tr>
        </thead>
        @foreach($students as $student)
        <tbody>

        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $student->name }}</td>
            <td>{{ $student->father_name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->address }}</td>
            <td>{{ $student->phone_number }}</td>
            <td>{{ $student->class }}</td>
            <td><a href="{{ route('student.delete',$student->id ) }}" CLASS="btn btn-danger">Delete Student</a></td>
            <td><a href="{{ route('student.Edite',$student->id ) }}" CLASS="btn btn-primary">Edite Student</a></td>

        </tr>

        </tbody>
        @endforeach
    </table>

@endsection
