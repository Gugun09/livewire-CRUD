<?php

namespace App\Http\Livewire\Jabatan;

use Livewire\Component;
use App\Jabatan;

class Edit extends Component
{
	public $jabatanId;
	public $nama;
	public $nip;
	public $jabatan;

	public function mount($id)
	{
		$jbtn = Jabatan::find($id);
		if ($jbtn) {
			$this->jabatanId = $jbtn->id;
			$this->nama = $jbtn->nama;
			$this->nip = $jbtn->nip;
			$this->jabatan = $jbtn->jabatan;
		}
	}

	public function update()
	{
		$jbtn = Jabatan::find($this->jabatanId);
		if ($jbtn) {
			$jbtn->update([
				'nama' => $this->nama,
				'nip' => $this->nip,
				'jabatan' => $this->jabatan
			]);
		}

		session()->flash('success', 'Data successfully update.');
		return redirect()->to('home');
	}
    public function render()
    {
        return view('livewire.jabatan.edit');
    }
}
