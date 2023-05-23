<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeacherStoreRequest;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /*$teachers = Teacher::where('science', 'Guliston shaxri')->get();*/
        /*$teachers = Teacher::inRandomOrder()->get();*/
        $teachers = Teacher::orderBy('id', 'DESC')->get();
        //$teachers = Teacher::where('address', 'Guliston shaxri')->where('science', 'history')->get();
        return view('teachers.index', ["teachers" => $teachers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TeacherStoreRequest $request)
    {
        $requestData = $request->all();
        if ($request->hasFile('image')) {

            $imageName = time() . "." . request()->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imageName);
            $requestData['image'] = $imageName;
        }
        //            dd($requestData);
        Teacher::create($requestData);
        return redirect()->route('teacher.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        $teacher = Teacher::findOrFail($teacher->id);
        if ($teacher == null) {
            return redirect()->route('teacher.index')->with("error", "Teacher not find");
        }
        return view('teachers.show', ['teacher' => $teacher]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teacher = Teacher::findOrFail($id);
        return view("teachers.edit", ['teacher' => $teacher]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'science' => 'required',
            'email' => 'required|email',
            'phone' => 'required'
        ]);
        $teacher = Teacher::findOrFail($id);
        $teacher->update($request->all());
        return redirect()->route('teacher.index')
            ->with("success", "$teacher->name's data has been updated ");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $teacher = Teacher::findOrFail($id);
        if (($teacher->image != "default.png")) {
            $status = @unlink(public_path('images/' . $teacher->image));
            if (!$status) {
                return redirect()->route('teacher.index')
                    ->with("error", "can not delete $teacher->image");
            }
        }

        $teacher->delete();
        return redirect()->route('teacher.index')
            ->with("success", "$teacher->name is deleted");
    }
}
