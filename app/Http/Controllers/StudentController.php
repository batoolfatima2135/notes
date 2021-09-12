<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function ShowStudents()
    {
        $data = Student::all();
        return view('Student.ShowStudents',compact('data'));
    }
    public function CreateStudentForm()
    {
        return view('Student.CreateForm');
    }

    public function CreateStudent(Request $request)
    {
        if($request->hasFile('image'))
        { //new chamge
            $filename =$request->image->getClientOriginalName();
            $request->image->StoreAs('StudentImages',$filename,'public');
            $Student =Student::create($request->all());
            $Student->image = $filename;
            $Student->save();
            return redirect()->back()->with('msg','student added succesfully');

        }
        else
        {
            return redirect()->back()->with('msg','please upload image');
        }



    }
    public function StudentEditForm(Student $Student)
    {
        return view('Student.EditForm',compact('Student'));
    }
    public function EditStudent(Request $request , Student $Student)
    {
       $Student->update($request->all());
       return redirect(route('ShowStudents'))->with('msg','Student updated succesfully');
    }

    public function DeleteStudent(Student $Student)
    {
        $Student->delete();
        return redirect()->back()->with('msg1','deleted succesfully');
    }
}
