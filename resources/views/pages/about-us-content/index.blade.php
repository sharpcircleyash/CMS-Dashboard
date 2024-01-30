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
            <div class="card-header"><strong>about us content</strong></div>
            <div class="card-body">
                <form action="{{ route('about-us-content.update', $aboutContent->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group mb-3">
                        <input type="text" placeholder="Title" id="title" class="form-control" name="title"
                            value="{{ $aboutContent->title }}" required autofocus>
                        @if ($errors->has('title'))
                        <span class="text-danger">{{ $errors->first('title') }}</span>
                        @endif
                    </div>
                    <div class="form-group mb-3">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"
                            required>{{ $aboutContent->description }}</textarea>
                        @if ($errors->has('description'))
                        <span class="text-danger">{{ $errors->first('description') }}</span>
                        @endif
                    </div>

                    <div class="d-grid mx-auto">
                        <button type="submit" class="btn btn-dark btn-block">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection