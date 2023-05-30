@extends('layout.mainlayout')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-5 mt-5">
                <div class="text-center mt-2">
                    <h5>My Detail Profil</h5>
                </div>
                @if(SESSION('success'))
                <div class="alert alert-success text-center fs-s-sm" role="alert">
                    {{SESSION('success')}}
                </div>
                @endif
                <div class="card border-0 shadow-sm mx-4 mb-4">
                    <form action="/my-profil/detail/{{Auth::user()->id}}" method="post" >
                        @csrf
                        @method('put')
                        <div class="card-body">
                            <div class="">
                                <a class="color-primary" href="/my-profil"><i class="bi bi-arrow-left"></i></a>
                            </div>
                            <div class="mb-3 mt-4">
                                <label class="mb-1 fs-s-sm opacity-75">Short Description</label>
                                <input type="text" name="short_description" id="" value="{{Auth::user()->detail->short_description}}" class="form-control fs-s-sm @error('short_description') is-invalid @enderror">
                                @error('short_description') <p class="fs-s-sm text-danger">{{$message}}</p> @enderror
                            </div>
                            <div class="mb-3 mt-4">
                                <label class="mb-1 fs-s-sm opacity-75">About</label>
                                <input type="text" name="about" id="" value="{{Auth::user()->detail->about}}" class="form-control fs-s-sm @error('about') is-invalid @enderror">
                                @error('about') <p class="fs-s-sm text-danger">{{$message}}</p> @enderror
                            </div>
                            <div class="mb-3 mt-4">
                                <label class="mb-1 fs-s-sm opacity-75">City</label>
                                <input type="text" name="city" id="" value="" class="form-control fs-s-sm @error('city') is-invalid @enderror">
                                @error('city') <p class="fs-s-sm text-danger">{{$message}}</p> @enderror
                            </div>
                            <div class="mb-3 mt-4">
                                <label class="mb-1 fs-s-sm opacity-75">Country</label>
                                <input type="text" name="country" id="" value="" class="form-control fs-s-sm @error('country') is-invalid @enderror">
                                @error('country') <p class="fs-s-sm text-danger">{{$message}}</p> @enderror
                            </div>
                            <div class="mb-3 ">
                                <label class="mb-1 fs-s-sm opacity-75">Website Domain</label>
                                <input type="text" name="website_domain" value="{{Auth::user()->detail->website_domain}}" id="" class="form-control fs-s-sm @error('website_domain') is-invalid @enderror">
                                @error('website_domain') <p class="fs-s-sm text-danger">{{$message}}</p> @enderror
                            </div>
                            <div class="mb-3 ">
                                <label class="mb-1 fs-s-sm opacity-75">Instagram ID</label>
                                <input type="text" name="instagram_id" value="{{Auth::user()->detail->instagram_id}}" id="" class="form-control fs-s-sm @error('instagram_id') is-invalid @enderror">
                                @error('instagram_id') <p class="fs-s-sm text-danger">{{$message}}</p> @enderror
                            </div>
                            <div class="mb-3 ">
                                <label class="mb-1 fs-s-sm opacity-75">Email Address</label>
                                <input type="text" name="email_address" value="{{Auth::user()->detail->email_address}}" id="" class="form-control fs-s-sm @error('email_address') is-invalid @enderror">
                                @error('email_address') <p class="fs-s-sm text-danger">{{$message}}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary w-100 rounded-1 fs-s-sm border-0 ">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection