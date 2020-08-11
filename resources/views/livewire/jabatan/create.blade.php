<div class="container">
    {{-- In work, do what you enjoy. --}}
    <div class="card">
    	<div class="card-header">Tambah Data</div>
    	<div class="card-body">
    		<div class="container">
		    	<div class="row">
		    		<div class="col-md-12">
		    			<form method="POST" wire:submit.prevent="store">
		    				<div class="form-group">
		    					<label for="" class="form-group">Nama</label>
		    					<input type="text" wire:model="nama" class="form-control @error('nama') is-invalid @enderror">
		    					@error('nama') 
		    						<div class="alert alert-danger">
		    							{{ $message }}
		    						</div>
		    					@enderror
		    				</div>
		    				<div class="form-group">
		    					<label for="" class="form-group">Nip</label>
		    					<input type="text" wire:model="nip" class="form-control @error('nip') is-invalid @enderror">
		    					@error('nip') 
		    						<div class="alert alert-danger">
		    							{{ $message }}
		    						</div>
		    					@enderror
		    				</div>
		    				<div class="form-group">
		    					<label for="" class="form-group">Jabatan</label>
		    					<input type="text" wire:model="jabatan" class="form-control @error('jabatan') is-invalid @enderror">
		    					@error('jabatan') 
		    						<div class="alert alert-danger">
		    							{{ $message }}
		    						</div>
		    					@enderror
		    				</div>
		    				<div class="form-group">
								<label for="" class="form-group"></label>
								<button type="submit" class="btn btn-primary float-right">Simpan</button>
								<a href="{{ route('home') }}" class="btn btn-info float-right mr-3">Back</a>
		    				</div>
		    			</form>
		    		</div>
		    	</div>
		    </div>
    	</div>
    </div>
</div>
