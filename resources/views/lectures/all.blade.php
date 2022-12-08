@extends("layouts.main")

@section("content")
    <h1>Lectures LIst</h1>
    <table class="table table-striped" style="vertical-align: middle; font-weight: bold; font-size: 20px;">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Educational Stage</th>
                        <th>Email</th>
                        <th>Courses</th>
                    </tr>
                </thead>
                <tbody>
                
                    @foreach ($lectures as $lecture)
                        <tr>
                            <td>{{ $lecture->name }}</td>
                            <td>{{ $lecture->educational_stage	 }}</td>
                            <td>{{ $lecture->email  }}</td>
                            <td>
                                <ul>
                                    @foreach ($lecture->courses as $course)
                                        <li>
                                            {{ $course->courses_name}}
                                        </li>
                                    @endforeach
                                </ul>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
    </table>
@endsection