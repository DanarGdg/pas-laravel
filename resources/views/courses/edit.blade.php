@extends("layouts.main")

@section("content")
<div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h3 align="center">Edit Users</h3>
                        <form action="/courses/update/ {{$course->id}}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="name">Name</label>
                                <input required type="name" value="{{ old('courses_name', $course->courses_name)}}" class="form-control" id="name" placeholder="Edit Course Name" name="courses_name">
                            </div>
                            <div class="form-group mb-3">
                                <label for="chapter">Chapter</label>
                                <input required type="number" class="form-control" value="{{ old('chapter', $course->chapter)}}" id="chapter" placeholder="Input course total chapter" name="chapter">
                            </div>

                            <div class="form-group mb-3">
                                <label for="exampleInputName">Lectures</label>
                                <select class="form-control" name="lectures_id">
                                    @foreach ($lectures as $lecture)
                                        @if (old('lectures_id', $course->lectures_id == $lecture->id))
                                            <option name="lectures_id" value="{{$lecture->id}}" selected>{{$lecture->name}}</option>
                                        @else
                                            <option name="lectures_id" value="{{$lecture->id}}">{{$lecture->name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label for="price">Price</label>
                                <input required type="number" class="form-control" value="{{ old('harga', $course->harga)}}" id="price" placeholder="Price" name="harga">
                            </div>

                            <div class="form-group mb-3">
                                <label for="release">Date Release</label>
                                <input required type="date" class="form-control" value="{{ old('release', $course->release)}}" id="release" placeholder="Masukkan tanggal" name="release">
                            </div>
                            <button type="submit" class="btn btn-warning" name="submit">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection