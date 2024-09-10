<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tentang_Saya extends Model
{
    use HasFactory;
    protected $fillable = ['deskripsi', 'pengalaman', 'pendidikan', 'skills'];
}
