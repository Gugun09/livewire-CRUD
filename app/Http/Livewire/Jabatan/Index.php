<?php

namespace App\Http\Livewire\Jabatan;

use App\Jabatan;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $search = '';
    public function updatingSearch()
    {
        $this->resetPage();
    }
    
    // public $jabatan = false;
    // protected $listeners = ['tampilData'];

    public function delete($id)
    {
        $delete = Jabatan::find($id);
        if ($delete) {
            $delete->delete();

            session()->flash('success', 'Data successfully deleted.');
            return redirect()->to('home');
        }
    }
    public function render()
    {
        return view('livewire.jabatan.index',[
        	'jabatan' => $this->search === null ? Jabatan::latest()->paginate(3) : Jabatan::where('nama', 'like', '%'.$this->search.'%')->paginate(3)
        ]);
    }

    // public function tampilData($jabatan)
    // {
    //     // dd($jabatan);
        
    // }
}
