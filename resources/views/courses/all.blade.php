@extends("layouts.main")

@section("content")
    <h1>Courses</h1>
    <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalDetail" href="/courses/create">add</a>  
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-12" role='alert'>
            {{ session()->get('success') }}
        </div>
    @endif
    <table class="table table-striped" style="vertical-align: middle; font-weight: bold; font-size: 20px;">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Total Chapter</th>
                        <th>Harga</th>
                        <th>Release</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                
                    @foreach ($courses as $course)
                        <tr>
                            <td>{{ $course->courses_name }}</td>
                            <td>{{ $course->chapter }}</td>
                            <td>{{ $course->harga }}</td>
                            <td>{{ $course->release}}</td>
                            <td>
                                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalDetail" href="/courses/detail/{{$course->id}}">Detail</a>
                                <a type="button" class="btn btn-warning" data-toggle="modal" href="/courses/edit/{{ $course->id }}">Edit</a>
                                <form action="/courses/delete/{{ $course->id }}" method="post" style="display: inline;">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger" onClick="return confirm('Are you sure ?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
    </table>
@endsection