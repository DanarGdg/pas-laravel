<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lectures;
use App\Models\Courses;

class LecturesController extends Controller
{
    public function index(){
        return  view('lectures.all', [
            'lectures' => Lectures::all()
        ]);
    }


}
