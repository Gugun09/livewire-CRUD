<?php

namespace App\Http\Livewire\Jabatan;

use App\Jabatan;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    
    // public $jabatan = false;
    protected $listeners = ['tampilData'];

    public function render()
    {
        return view('livewire.jabatan.index',[
        	'jabatan' => Jabatan::latest()->paginate(3)
        ]);
    }

    public function tampilData($jabatan)
    {
        // dd($jabatan);
        
    }
}
