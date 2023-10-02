<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    use HasFactory;
    protected $table = "students";
    protected $primaryKey = "student_id";
    protected $fillable = [
        'name', 'mobile', 'password', 'class', 'subjects', 'gender', 'profile_pic', 'address'
    ];
}
