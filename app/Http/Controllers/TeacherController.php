<?php

    namespace App\Http\Controllers;

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
        public function store(Request $request)
        {
            //$teacher = new Teacher;
            //$teacher->name = $request->name;
            //$teacher->address = $request->address;
            //$teacher->science = $request->science;
            //$teacher->email = $request->email;
            //$teacher->phone = $request->phone;
            //$teacher->save();
            Teacher::create($request->all());
            return redirect()->route('teacher.index');
        }

        /**
         * Display the specified resource.
         */
        public function show(string $id)
        {
            //
        }

        /**
         * Show the form for editing the specified resource.
         */
        public function edit(string $id)
        {
            //
        }

        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, string $id)
        {
            //
        }

        /**
         * Remove the specified resource from storage.
         */
        public function destroy(string $id)
        {
            //
        }
    }
