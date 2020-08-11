<div>
	{{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
	<input class="float-right form-group" placeholder="search" type="text" wire:model="search">
    <a href="{{ route('jabatan.create') }}" class="btn btn-primary mb-3 btn-sm float-right mr-2"><i class="fa fa-plus"></i></a>
    <div class="container">
    	<div class="row">
    		<div class="col-md-12">
    			<table class="table table-striped">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Nama</th>
				      <th scope="col">Nip</th>
				      <th scope="col">Jabatan</th>
				      <th scope="col">Aksi</th>
				    </tr>
				  </thead>
				  <tbody>
				  	@forelse ($jabatan as $data)
				    <tr>
				      <th scope="row">{{ $loop->iteration }}</th>
				      <td>{{ $data->nama }}</td>
				      <td>{{ $data->nip }}</td>
				      <td>{{ $data->jabatan }}</td>
				      <td>
				      	<a href="{{ route('jabatan.edit', $data->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
				      	<button wire:click="delete({{ $data->id }})" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
				      </td>
				    </tr>
				    @empty
				      <span class="badge badge-danger form-group text-center float-right">Tidak Ada Data Untuk Ditampilkan!!!</span>
					@endforelse
				  </tbody>
				</table>
				{{ $jabatan->links() }}
    		</div>
    	</div>
    </div>
</div>