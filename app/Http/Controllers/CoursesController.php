<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\Lectures;

class CoursesController extends Controller
{
    public function index(){
        return  view('courses.all', [
            'courses' => Courses::all()
        ]);
    }

    public function show(Courses $course){
        return view('courses.detail', [
            'course' => $course
        ]);
    }

    public function create(){
        return view('courses.create', [
            'lectures' => Lectures::all()
        ]);
    }

    public function store(Request $request){
        $validateDate = $request->validate([
            'lectures_id' => 'required',
            'courses_name' => 'required|max:255',
            'chapter' => 'integer',
            'harga' => 'integer',
            'release' => 'required'
        ]);

        Courses::create($validateDate);
        return redirect('/courses/all')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(Courses $course){
        return view('courses.edit', [
            'course' => $course,
            'lectures' => Lectures::all()
        ]);
    }

    public function update(Request $request, Courses $course){
        $validateDate = $request->validate([
            'lectures_id' => 'required',
            'courses_name' => 'required|max:255',
            'chapter' => 'integer',
            'harga' => 'integer',
            'release' => 'required'
        ]);

        Courses::where('id', $course->id)
            ->update($validateDate);
        return redirect('/courses/all')->with('success', 'Data berhasil diubah');
    }

    public function destroy(Courses $course){
        Courses::destroy($course->id);
        return redirect('/courses/all')->with('success', 'Data berhasil dihapus');
    }
}
