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
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"><strong>Home Banner</strong></div>
            <div class="card-body">

                <div class="form-group mb-3 col-md-8">
                    <input type="text" placeholder="Title" id="title" class="form-control" name="title"
                        value="{{ $bannerContent->title }}" readonly autofocus>
                    @if ($errors->has('title'))
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                    @endif
                </div>
                <div class="form-group mb-3 col-md-8">
                    <img src="{{URL::asset('/images/'.$bannerContent->src)}}" alt="profile Pic" height="200"
                        width="200">
                </div>

                <div class="d-grid mx-auto">
                    <button type="submit" class="btn btn-dark btn-block"><a
                            href="{{ url('banner', $bannerContent->id.'/edit') }}">Edit</a></button>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection