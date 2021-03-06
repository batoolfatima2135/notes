<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Mail\Mailable;
use App\mail\EditedMail;
=======
use Illuminate\Support\Facades\Storage;
>>>>>>> 388881b582000dca1a6dae867bfccf88a7ac1ef3

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
        {
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
        if($request->hasFile('image'))
        {
            $filename = $request->image->getClientOriginalName();
            Storage::delete('/public/StudentImages/'.$Student->image);
            $request->image->storeAs('StudentImages',$filename,'public');
            $Student->update($request->all());
            $Student->image = $filename;

        }
       $Student->update($request->all());
       Mail::to($Student['email'])->send(new EditedMail($Student));
       return redirect(route('ShowStudents'))->with('msg','Student updated succesfully');
    }

    public function DeleteStudent(Student $Student)
    {
        $Student->delete();
        return redirect()->back()->with('msg1','deleted succesfully');
    }
}
