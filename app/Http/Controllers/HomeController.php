<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\Edited;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function Addimage(Request $request)
    {
        $filename = $request->image->getClientOriginalName();
        $request->image->storeAs('images',$filename,'public');
        $id = Auth::user()->id;
        $user = User::find($id);
        $user->update(['image'=>$filename]);
        $user->save();
        $user->notify(new Edited($user));
        return redirect()->back();
    }
}
