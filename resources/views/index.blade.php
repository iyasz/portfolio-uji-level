@extends('layout.mainlayout')

@section('content')

    <section id="backgroundGradient"></section>

       <section id="header-profile">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-5">
                    <div class="">
                        <img src="https://static.wixstatic.com/media/269653_f8294923a5304079bed95d039fa9a193~mv2.gif" width="100%" class="rounded-circle shadow-sm border border-5 border-white" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-12 d-flex align-items-center">
                    <div class="">
                        <h4 class="fw-bolder mb-1">Yasz Avellia</h4>
                        <p class="fs-s-sm opacity-75">Lorem ipsum, dolor sit amet consectetur.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-12 d-flex align-items-center justify-content-lg-end justify-content-start">
                    <div class="">
                        <button class="btn btn-primary fs-s-sm rounded-1 border-0">View Portfolio</button>
                        <button class="btn btn-primary fs-s-sm rounded-1 border-0">Follow</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr class="mx-lg-5 mx-3 d-block d-lg-none mt-0">

    {{-- Mobile Responsive  --}}
    <section id="aboutMe">
        <div class="container d-block d-lg-none">
            <div class="row">
                <div class="col-12">
                    <div class="row rounded-1">
                        <div class="col-lg-3 mb-3">
                            <p class="fs-s-sm mb-1">Location</p>
                            <h6 class="fs-sm color-primary">Tokyo, Japan</h6>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <p class="fs-s-sm mb-1">Website</p>
                            <a href="https://www.iyaszanime.site" class="h6 text-decoration-none fs-sm color-primary">iyaszanime.site</a>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <p class="fs-s-sm mb-1">Instagram</p>
                            <a href="https://www.instagram.com/yaszavellia/" class="h6 text-decoration-none fs-sm color-primary">@yaszavellia</a>
                        </div>
                        <div class="col-lg-3">
                            <p class="fs-s-sm mb-1">Email</p>
                            <a href="mailto:zakamaragames@gmail.com" class="h6 text-decoration-none fs-sm color-primary">yszavlla@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr class="mx-lg-5 mx-3 ">
    
    {{-- dekstop responsive  --}}
    <section id="aboutMe">
        <div class="container my-4">
            <div class="row">
                <div class="col-lg-3 col-12 d-lg-block d-none">
                    <h6>About Me</h6>
                </div>
                <div class="col-lg-9 col-12 ">                     
                     <h6 class="d-lg-none d-block">About Me</h6>
                    <p class="fs-s-sm opacity-75">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo inventore rem consequuntur ab nesciunt doloremque voluptates nulla praesentium odit ut!</p>
                    <p class="fs-s-sm opacity-75">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam!</p>
                    <a href="" class="fs-s-sm text-decoration-none fw-bold color-primary">Read More</a>
                    <div class="row detail-profil mt-4 pt-3 pb-2 px-2 rounded-1 d-none d-lg-flex">
                        <div class="col-lg-3">
                            <p class="fs-s-sm mb-1">Location</p>
                            <h6 class="fs-sm color-primary">Tokyo, Japan</h6>
                        </div>
                        <div class="col-lg-3">
                            <p class="fs-s-sm mb-1">Website</p>
                            <a href="https://www.iyaszanime.site" class="h6 text-decoration-none fs-sm color-primary">iyaszanime.site</a>
                        </div>
                        <div class="col-lg-3">
                            <p class="fs-s-sm mb-1">Instagram</p>
                            <a href="https://www.instagram.com/yaszavellia/" class="h6 text-decoration-none fs-sm color-primary">@yaszavellia</a>
                        </div>
                        <div class="col-lg-3">
                            <p class="fs-s-sm mb-1">Email</p>
                            <a href="mailto:zakamaragames@gmail.com" class="h6 text-decoration-none fs-sm color-primary">yszavlla@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr class="mx-lg-5 mx-3">

    <section id="experience">
        <div class="container my-4">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12 d-lg-block d-md-block d-none">
                    <h6>Experience</h6>
                </div>
                <div class="col-lg-9 col-12 ">
                    @if(Auth::user())
                    <div class="text-end mb-2">
                        <button class="btn btn-primary fs-s-sm bg-transparent fw-bold border-0 rounded-1 color-primary"><i class="bi bi-plus"></i> Tambah Experience</button>
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12 mb-3">
                            <div class="card rounded-1 ">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <img src="{{asset('img/wangybat.png')}}" width="50" class="rounded-circle" alt="">
                                        <div class="ms-3">
                                            <h6 class="fs-s-sm mb-0 fw-bold">Lead Product Designer</h6>
                                            <p class="fs-s-sm opacity-75">Layers</p>
                                        </div>
                                        @if(Auth::user())
                                        <div class="ms-auto">
                                            <a href="" class="btn btn-primary btn-sm border-0 rounded-1"><i class="bi bi-pencil"></i></a>
                                            <button onclick="return confirm('Apakah Kamu Ingin Menghapus Experience ini?')" class="btn btn-danger btn-sm border-0 rounded-1"><i class="bi bi-trash"></i></button>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="mt-3">
                                        <p class="fs-s-sm opacity-75">May 2020 - Present</p>
                                    </div>
                                </div>
                                <div class="card-footer bg-white text-end">
                                    <a href="" class="fs-s-sm text-decoration-none ">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="mx-lg-5 mx-3">
    <section id="experience">
        <div class="container my-4">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12 d-lg-block d-md-block d-none">
                    <h6>Project</h6>
                </div>
                <div class="col-lg-9 col-12 ">
                    @if(Auth::user())
                    <div class="text-end mb-2">
                        <button class="btn btn-primary fs-s-sm bg-transparent fw-bold border-0 rounded-1 color-primary"><i class="bi bi-plus"></i> Tambah Project</button>
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12 mb-3">
                            <div class="card rounded-1 ">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <img src="{{asset('img/wangybat.png')}}" width="50" class="rounded-circle" alt="">
                                        <div class="ms-3">
                                            <h6 class="fs-s-sm mb-0 fw-bold">Lead Product Designer</h6>
                                            <p class="fs-s-sm opacity-75">Layers</p>
                                        </div>
                                        @if(Auth::user())
                                        <div class="ms-auto">
                                            <a href="" class="btn btn-primary btn-sm border-0 rounded-1"><i class="bi bi-pencil"></i></a>
                                            <button onclick="return confirm('Apakah Kamu Ingin Menghapus Experience ini?')" class="btn btn-danger btn-sm border-0 rounded-1"><i class="bi bi-trash"></i></button>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="mt-3">
                                        <p class="fs-s-sm opacity-75">May 2020 - Present</p>
                                    </div>
                                </div>
                                <div class="card-footer bg-white text-end">
                                    <a href="" class="fs-s-sm text-decoration-none ">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="mx-lg-5 mx-3">
@endsection