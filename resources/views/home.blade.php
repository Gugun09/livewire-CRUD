@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }} <a href="{{ route('jabatan.upload') }}" class="btn btn-info btn-sm float-right"><i class="fa fa-user"></i></a></div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @elseif(session('danger'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('danger') }}
                        </div>
                    @endif
                   
                    <livewire:jabatan.index />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection