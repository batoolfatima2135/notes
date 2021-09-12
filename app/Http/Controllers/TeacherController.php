<?php

namespace App\Http\Controllers;

use App\Models\teacher;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class TeacherController extends Controller
{
    public function createform()
    {
        return view('teacher.create');
    }
    public function create(Request $request)
    {
       teacher::Create($request->all());
       return redirect()->back()->with('msg','teacher created sucessfully');
    }
    public function show()
    {
        $data =teacher::all();
        return view('teacher.show',compact('data'));
    }
}
