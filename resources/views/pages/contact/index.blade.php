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
            <div class="card-header"><strong>Contact List</strong></div>
            <div class="card-body">
                <ul class="list-group list-group-horizontal col-md-12" style="--bs-list-group-bg: #2125297a;">
                    <li class="list-group-item col-md-1">No.</li>
                    <li class="list-group-item col-md-3">Name</li>
                    <li class="list-group-item col-md-6">Email</li>
                    <li class="list-group-item col-md-1">View</li>
                    <li class="list-group-item col-md-1">Delete</li>
                </ul>
                @if($list_data)
                @foreach ($list_data as $list)
                <ul class="list-group list-group-horizontal col-md-12">
                    <li class="list-group-item col-md-1">{{$list->id}}</li>
                    <li class="list-group-item col-md-3">{{$list->name}}</li>
                    <li class="list-group-item col-md-6">{{$list->email}}</li>

                    <li class="list-group-item col-md-1">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#modal{{$list->id}}">
                            View
                        </button>
                    </li>


                    <li class="list-group-item col-md-1">
                        <form action="{{ route('contact.destroy', $list->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-trash" viewBox="0 0 16 16">
                                    <path
                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z">
                                    </path>
                                    <path
                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z">
                                    </path>
                                </svg>
                            </button>
                        </form>

                    </li>
                </ul>

                <!-- Modal -->
                <div class="modal fade" id="modal{{$list->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Subject: {{$list->subject}}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                {{$list->message}}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <ul class="list-group list-group-horizontal col-md-12">
                    No data found
                </ul>
                @endif

            </div>
        </div>
    </div>
</div>

@endsection