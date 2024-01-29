@extends('auth.layouts')
@section('content')

<div class="row justify-content-center">
    @if(Session::get('success'))
    <div class="col-md-8">
        {{-- <div class="alert alert-success" role="alert">
                
        </div> --}}
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session::get('success') }}  
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
    </div>
    @endif
    <div class="col-md-8">
        <div class="card">
            <div class="card-header"><strong>About us</strong></div>
            <div class="card-body">
            </div>
        </div>
    </div>
</div>

@endsection