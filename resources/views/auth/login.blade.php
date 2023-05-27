@extends('layout.mainlayout')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-5 mt-5">
                <div class="text-center mt-5">
                    <h5>Welcome To Author Gate</h5>
                </div>
                <div class="card border-0 shadow-sm mx-4">
                    <form action="/login" method="get">
                        @csrf
                        <div class="card-body">
                            @error('allError')
                            <div class="alert alert-danger fs-s-sm text-center" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                            <div class="mb-3 mt-4">
                                <label class="mb-1 fs-s-sm opacity-75">Username</label>
                                <input type="text" name="username" id="" class="form-control fs-s-sm @error('username') is-invalid @enderror">
                                @error('username') <p class="fs-s-sm text-danger">{{$message}}</p> @enderror
                            </div>
                            <div class="mb-3 ">
                                <label class="mb-1 fs-s-sm opacity-75">Password</label>
                                <input type="text" name="password" id="" class="form-control fs-s-sm @error('password') is-invalid @enderror">
                                @error('password') <p class="fs-s-sm text-danger">{{$message}}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary w-100 rounded-1 fs-s-sm">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection