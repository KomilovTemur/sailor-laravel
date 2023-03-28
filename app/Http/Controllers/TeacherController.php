<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    public function  create()
    {
        $all = DB::table('teacher')->get();
        return view("teachers.create", ['all' => $all]);
    }
    public function  store(Request $req)
    {
        DB::table('teacher')->insert([
            'name' => $req->name,
            'address' => $req->address,
            'science' => $req->science,
            'email' => $req->email,
            'phone' => $req->phone,
        ]);
        // DB::table('teacher')->insert([
        //     'name' => $req->name,
        //     'address' => $req->address,
        //     'science' => $req->science,
        //     'email' => $req->email,
        //     'phone' => $req->phone,
        // ]);
        return redirect("/teacher");
    }
}
