<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resumes extends Model
{
    /** @use HasFactory<\Database\Factories\ResumesFactory> */
    use HasFactory;

    protected $fillable = ['name', 'title', 'status', 'role', 'email', 'experience', 'skills', 'education'];
    

}
