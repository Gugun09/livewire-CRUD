<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Image;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
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

    public function profile()
    {
        return view('profile', [
            'user' => Auth::user()
        ]);
    }

    public function update(Request $request)
    {
        if ($request->hasFile('image')) {
            $avatar = $request->file('image');
            $filename = time(). '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->save(public_path('/storage/upload/' . $filename));

            $user = Auth::user();
            $user->image = $filename;
            $user->save();
        }
        return view('profile', [
            'user' => Auth::user()
        ]);
    }
}
