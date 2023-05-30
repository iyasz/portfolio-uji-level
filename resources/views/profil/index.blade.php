@extends('layout.mainlayout')

@section('content')

@if(SESSION('success'))

<script>
      iziToast.show({
    title: "😍",
    message: "Berhasil Di follow!",
    position: "topCenter",
    drag: false,
    pauseOnHover: false,
    color: "green",
    iconUrl: null,
    timeout: 3000,
  });
</script>

@endif
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-5 mt-5">
                <div class="text-center mt-2">
                    <h5>My Profil</h5>
                </div>
                @if(SESSION('success'))
                <div class="alert alert-success text-center fs-s-sm" role="alert">
                    {{SESSION('success')}}
                </div>
                @endif
                <div class="card border-0 shadow-sm mx-4 mb-4">
                    <form action="/my-profil/{{Auth::user()->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="card-body">
                            <div class="text-end">
                                <a class="color-primary" href="/my-profil/detail"><i class="bi bi-arrow-right"></i></a>
                            </div>
                            <div class="mb-3 mt-2">
                                <label class="mb-1 fs-s-sm opacity-75 d-block">Photo</label>
                                <div class="text-center">
                                    <label class="my-2"><img src="{{asset('storage/gambar/'.Auth::user()->photo)}}" class="rounded-circle" width="100" alt=""></label>
                                </div>
                                <input type="file" name="gambar" id="" class="form-control fs-s-sm @error('gambar') is-invalid @enderror">
                                @error('gambar') <p class="fs-s-sm text-danger">{{$message}}</p> @enderror
                            </div>
                            <div class="mb-3 mt-4">
                                <label class="mb-1 fs-s-sm opacity-75">Name</label>
                                <input type="text" name="name" id="" value="{{Auth::user()->name}}" class="form-control fs-s-sm @error('name') is-invalid @enderror">
                                @error('name') <p class="fs-s-sm text-danger">{{$message}}</p> @enderror
                            </div>
                            <div class="mb-3 mt-4">
                                <label class="mb-1 fs-s-sm opacity-75">Email</label>
                                <input type="text" name="email" id="" value="{{Auth::user()->email}}" class="form-control fs-s-sm @error('email') is-invalid @enderror">
                                @error('email') <p class="fs-s-sm text-danger">{{$message}}</p> @enderror
                            </div>
                            <div class="mb-3 mt-4">
                                <label class="mb-1 fs-s-sm opacity-75">Username</label>
                                <input type="text" name="username" id="" value="{{Auth::user()->username}}" class="form-control fs-s-sm @error('username') is-invalid @enderror">
                                @error('username') <p class="fs-s-sm text-danger">{{$message}}</p> @enderror
                            </div>
                            <div class="mb-3 mt-4">
                                <label class="mb-1 fs-s-sm opacity-75">Nickname</label>
                                <input type="text" name="nickname" id="" value="{{Auth::user()->nickname}}" class="form-control fs-s-sm @error('nickname') is-invalid @enderror">
                                @error('nickname') <p class="fs-s-sm text-danger">{{$message}}</p> @enderror
                            </div>
                            <div class="mb-3 ">
                                <label class="mb-1 fs-s-sm opacity-75">Password</label>
                                <input type="text" name="pw" id="" class="form-control fs-s-sm @error('pw') is-invalid @enderror">
                                @error('pw') <p class="fs-s-sm text-danger">{{$message}}</p> @enderror
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