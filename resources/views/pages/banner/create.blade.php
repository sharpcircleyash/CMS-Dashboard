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
            <div class="card-header"><strong>Banners</strong></div>
            <div class="card-body">
            <div class="container mt-2">
    <div class="row">
        <div class="col-md-12">
           
            <form action="{{ route('banner.store') }}" method="post" enctype="multipart/form-data" id="image-upload" class="dropzone">
                @csrf
                <div>
                    <h3 style="text-align: center;">Upload Image By Click On Box</h3>
                </div>
            </form>
        </div>
    </div>
</div>
            </div>
        </div>
    </div>
</div>

@endsection