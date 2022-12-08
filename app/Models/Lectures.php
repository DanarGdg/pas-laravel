<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lectures extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


    public function courses(){
        return $this->hasMany(Courses::class);
    }
}