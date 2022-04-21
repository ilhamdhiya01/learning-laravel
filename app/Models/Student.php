<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    // guarded boleh digunakan jika form itu yang mengisi kita sendiri
    // protected $guarded = [];
    // jika yang menginputkan orang lain gunakan fillable
    protected $fillable = ['nama','nim','email','no_wa','status'];
}
