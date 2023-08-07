<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class Apicontroller extends Controller
{
 public function create(Request $request)
 {
 
    $student = new Student();
    $student->fname=$request->input('fname');
    $student->lname=$request->input('lname');
    $student->email=$request->input('email');
    $student->password=$request->input('password');

    $student->save();
    return response()->json($student);

 }

public function show()
{
   
    $student = Student::all();
    return response()->json($student);
}
public function showByid($id)
{

    $student = Student::find($id);
    return response()->json($student);

}


public function updateByid(Request $request,$id)
{
$student = Student::find($id);

$student->fname=$request->input('fname');
    $student->lname=$request->input('lname');
    $student->email=$request->input('email');
    $student->password=$request->input('password');

$student->save();
return response()->json($student);

}

}
