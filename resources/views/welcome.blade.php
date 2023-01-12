<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>CRUD Laravel</title>
</head>
<body>

<div class="text-center"><h3>School App</h3></div>
<br>

<div class="container">
    <div class="row">
        <div class="col-lg-2">
            <div class="card">
                <div class="card-header">
                    Links
                </div>
                <div class="card-body">
                    <ol>
                        <li>Home</li>
                        <li><a href="{{route('create.student')}}">Create a Student</a></li>
                        <li><a href="{{route('show.students')}}">show students</a></li>
                        <li><a href="{{route('school.create')}}">Create a School</a></li>
                        <li><a href="{{route('show.school')}}">Show a School</a></li>
                    </ol>
                </div>
            </div>
        </div>
    <div class="col-lg-10">
        <div class="card">

            <div class="card-header">
                Body
            </div>

            <div class="card-body">
                @yield('content')
            </div>
        </div>

    </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
</html>
