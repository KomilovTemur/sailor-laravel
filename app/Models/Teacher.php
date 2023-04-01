<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $table = "teacher";

    // model
    // modeldagi qaysi ustonlar majburiy kiritishlini korsatadi
    protected $fillable = [
        "name",
        "address",
        "science",
        "email",
        "phone"
    ];

    // hammasini oladi
//    protected $guarded = [];
}
