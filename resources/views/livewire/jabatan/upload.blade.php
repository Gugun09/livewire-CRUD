<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="container">
    	<div class="row">
    		<div class="col-md-12 col-12 col-sm-4">
    			<div class="card">
    				<div class="card-header">Upload Image</div>
    				<div class="card-body">
    					<img src="/storage/upload/{{ auth()->user()->image }}" alt="" style="width: 150px; height: 150px; float: left; border-radius: 50%; margin-right: 25px">
    					<h2>{{ $user->name }}</h2>
    					<div wire:loading wire:target="image">Uploading...</div>
    					<form action="" wire:submit.prevent="save" enctype="multipart/form-data">
    						<input type="file" wire:model="image" id="" >
    						@error('image')
    							<div class="alert alert-danger">
    								{{ $message }}
    							</div>
    						@enderror
    						<button type="submit" class="btn btn-primary btn-sm">Upload</button>
    					</form>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>
