<div>
	{{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
	<livewire:jabatan.create />
	<br>
    <a href="{{ route('jabatan.create') }}" class="btn btn-primary mb-3">Tambah</a>
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
				    </tr>
				  </thead>
				  <tbody>
				  	@foreach($jabatan as $data)
				    <tr>
				      <th scope="row">1</th>
				      <td>{{ $data->nama }}</td>
				      <td>{{ $data->nip }}</td>
				      <td>{{ $data->jabatan }}</td>
				    </tr>
					@endforeach
				  </tbody>
				</table>
				{{ $jabatan->links() }}
    		</div>
    	</div>
    </div>
</div>