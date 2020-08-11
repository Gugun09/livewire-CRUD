<?php

namespace App\Http\Livewire\Jabatan;

use Livewire\Component;
use App\Jabatan;

class Create extends Component
{
	public $nama;
	public $nip;
	public $jabatan;

    public function store()
    {
    	$this->validate([
    		'nama' => 'required',
    		'nip' => 'required',
    		'jabatan' => 'required'
    	]);
    	$jabatan = Jabatan::create([
    		'nama' => $this->nama,
    		'nip' => $this->nip,
    		'jabatan' => $this->jabatan
    	]);
		$this->inputDelete();
		$this->emit('tampilData', $jabatan);
		// session()->flash('success', 'Data successfully add.');
		// return redirect()->to('home');
	}
	
	public function inputDelete()
	{
		$this->nama = null;
		$this->nip = null;
		$this->jabatan = null;
	}
    public function render()
    {
        return view('livewire.jabatan.create');
    }
}
