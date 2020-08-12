<?php

namespace App\Http\Livewire\Jabatan;

use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;
use App\User;
use Auth;
use Image;

class Upload extends Component
{
	use WithFileUploads;
	public $image;

    public function render()
    {
        return view('livewire.jabatan.upload',[
        	'user' => Auth::user()
        ]);
    }

    public function save(Request $request)
    {
        if ($request->hasFile('image')) {
            $avatar = $request->file('image');
            $filename = time(). '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->save(public_path('/upload/' . $filename));

            $user = Auth::user();
            $user->image = $filename;
            $user->save();
            dd($user);
        }
        return view('livewire.jabatan.upload',[
            'user' => Auth::user()
        ]);
    }
}
