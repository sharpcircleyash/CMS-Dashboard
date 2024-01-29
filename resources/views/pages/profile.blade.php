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
            <div class="card-header"><strong>Profile</strong></div>
            <div class="card-body">
                <form action="{{ route('profile.update') }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group mb-3">
                        <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                           value="{{ auth()->user()->name }}" required autofocus>
                        @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" placeholder="Email" id="email_address" class="form-control"
                            name="email" value="{{ auth()->user()->email }}" required readonly>
                        @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" placeholder="Password" id="password" class="form-control"
                            name="password" required>
                        @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="d-grid mx-auto">
                        <button type="submit" class="btn btn-dark btn-block">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Password update --}}
    <div class="col-md-8 mt-5">
        <div class="card">
            <div class="card-header"><strong>Password</strong></div>
            <div class="card-body">
                <form action="{{ route('profile.password-update') }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group mb-3">
                        <input type="password" placeholder="Old Password" id="old_password" class="form-control"
                            name="old_password" required>
                        @if ($errors->has('old_password'))
                        <span class="text-danger">{{ $errors->first('old_password') }}</span>
                        @endif
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" placeholder="New Password" id="password" class="form-control"
                            name="new_password" required>
                        @if ($errors->has('new_password'))
                        <span class="text-danger">{{ $errors->first('new_password') }}</span>
                        @endif
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" placeholder="Confirm Password" id="password_confirmation" class="form-control"
                            name="new_password_confirmation" required>
                        @if ($errors->has('new_password_confirmation'))
                        <span class="text-danger">{{ $errors->first('new_password_confirmation') }}</span>
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