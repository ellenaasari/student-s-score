<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    //tambahkan kode berikut
    protected $fillable = [
        'name', 'kelas', 'nilai1', 'nilai2', 'nilai3',
    ];
}