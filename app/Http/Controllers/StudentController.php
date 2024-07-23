<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\SubjectGrade;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['student'] = Student::all();
        return view('student.index', $data);
        //return Student::all();
        //return Student::where('province', 'Arizona')->get();
         
        //return Student::where('province', 'Arizona')
        //->where('fname','Jules')
        //->get();

        //return Student::where('province', 'Arkansas')
         //->orWhere('province', 'texas')
         //->orWhere('fname', 'brad')
         //->get();

         //return Student::where('province', 'like', '%t%') ->get();

         //return Student::orderBy('fname')->get();
         //return Student::orderBy('fname','desc')->get();

        //return Student::limit(7)->get();
        //return Student::whereIn('id', [1,3,5,7,9,11])->get();

        //return Student::where('province', 'Arkansas')->first();

        //return Student::with('grades')->get();

        //return student::with(['grade' => function($query){
        //return $query->where('grade', '>=', 97 ); 
        //}])->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = new Student();
        $student->fname = $request['fname'];
        $student->lname = $request['fname'];
        $student->email = $request['fname'];
        $student->phone = $request['fname'];
        $student->address = $request['fname'];
        $student->city = $request['fname'];
        $student->state = $request['fname'];
        $student->zip = $request['fname'];
        $student->birthdate = $request['fname'];
        $student->save();

        return redirect()->to('student');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        //return Student::find($id);
        
        //$student = Student::find($id);

        //return $student->fname . ' ' .  $student->lname;

        //$student = Student::find($id);
        //return $student->fullname;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['student'] = Student::find($id);
        return view('student.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $student = Student::find($id);
        $student->fname = $request['fname'];
        $student->lname = $request['fname'];
        $student->email = $request['fname'];
        $student->phone = $request['fname'];
        $student->address = $request['fname'];
        $student->city = $request['fname'];
        $student->state = $request['fname'];
        $student->zip = $request['fname'];
        $student->birthdate = $request['fname'];
        $student->save();
        return redirect()->toback();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->to('students');
    }
}
