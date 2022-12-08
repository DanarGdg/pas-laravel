@extends("layouts.main")

@section("content")
    <h1>Detail Course</h1>
    <p>Course TItle: {{$course->courses_name}}</p>
    <p>Total Chapter : {{$course->chapter}}</p>
    <p>Price : {{$course->harga}}</p>
    <p>Release : {{$course->lecture->name}}</p>             
    <a class="btn btn-primary" href="/courses/all">back</a>
@endsection