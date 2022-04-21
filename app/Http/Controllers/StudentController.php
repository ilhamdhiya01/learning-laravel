<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Requests\StudentRequest;

class StudentController extends Controller
{
    public function index()
    {
        return view('student.index', [
            'students' => Student::orderBy('id','desc')->get()
        ]);
    }

    public function create()
    {
        return view('student.add', [
            'student' => new Student(),
            'submit' => 'Tambah'
        ]);
    }

    public function store(StudentRequest $request)
    {
        // $request->all() digunakan jika field nama di db sudah sama dengan name form
        Student::create($request->all());

        return redirect('/student');
    }

    public function edit(Student $student)
    {
        // $student = Student::where('id',$id)->first();
        // find hanya bisa digunakan untuk mencari berdasarkan id saja
        // $student = Student::find($id);
        return view('student.edit', [
            'student' => $student,
            'submit' => 'Ubah'
        ]);
    }

    public function update(StudentRequest $request, $id)
    {
        Student::find($id)->update($request->all());

        return redirect('/student');
    }

    public function destroy($id)
    {
        Student::find($id)->delete();
        return redirect('/student');
    }
}
