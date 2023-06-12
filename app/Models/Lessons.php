<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lessons extends Model
{
    use HasFactory;
    protected $fillable = [
        'title_uz',
        'title_ru',
        'title_en',
        'name_uz',
        'name_ru',
        'name_en',
    ];
}
