@extends('layout.mainlayout')

@section('navbar-menu')
<ul class="navbar-nav mx-auto">
    <li class="nav-item">
        <a class="nav-link px-2 px-lg-auto mx-2 mb-1 mb-lg-0 fs-sm" href="#header-profile">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link px-2 px-lg-auto mx-2 mb-1 mb-lg-0 fs-sm" href="#about">About</a>
    </li>
    <li class="nav-item">
        <a class="nav-link px-2 px-lg-auto mx-2 mb-1 mb-lg-0 fs-sm" href="#experience">Experience</a>
    </li>
    <li class="nav-item">
        <a class="nav-link px-2 px-lg-auto mx-2 mb-1 mb-lg-0 fs-sm" href="#project">Projects</a>
    </li>
    <li class="nav-item">
        <a class="nav-link px-2 px-lg-auto mx-2 mb-1 mb-lg-0 fs-sm" href="#">Tasks</a>
    </li>
</ul>
@endsection

@section('content')

    <section id="backgroundGradient"></section>

       <section id="header-profile">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-5">
                    <div class="position-relative">
                        <img src="https://static.wixstatic.com/media/269653_f8294923a5304079bed95d039fa9a193~mv2.gif" width="100%" class="rounded-circle shadow-sm border border-5 border-white" alt="">
                        <p class="position-absolute author-status p-1 rounded-circle fs-sm" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="{{$author->content}}">{{$author->emote}}</p>
                        
                    </div>
                </div>
                <div class="col-lg-6 col-12 d-flex align-items-center content-name-author">
                    <div class="mt-lg-4 mt-1">
                        <h2 class="fw-bolder mb-1"><span>Yasz</span> Avellia</h2>
                        <p class="fs-s-sm opacity-75">Saya memiliki keinginan untuk menjadi villain.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-12 d-flex align-items-center justify-content-lg-end justify-content-start">
                    <div class="">
                        <button class="btn btn-primary fs-s-sm rounded-1 border-0"><i class="bi bi-chat-dots me-1"></i> Hire Me!</button>
                        <button class="btn btn-primary fs-s-sm rounded-1 border-0"><i class="bi bi-plus"></i> Follow</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr class="mx-lg-5 mx-3 d-block d-lg-none mt-0">

    {{-- Mobile Responsive  --}}
    <section id="about">
        <div class="container d-block d-lg-none">
            <div class="row">
                <div class="col-12">
                    <div class="row rounded-1">
                        <div class="col-lg-3 mb-3">
                            <p class="fs-s-sm mb-1 color-primary">Location</p>
                            <h6 class="fs-sm color-primary fw-bold">Tokyo, Japan</h6>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <p class="fs-s-sm mb-1 color-primary">Website</p>
                            <a href="https://www.iyaszanime.site" class="h6 text-decoration-none fs-sm color-primary fw-bold">iyaszanime.site <i class="bi bi-globe ms-1"></i></a>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <p class="fs-s-sm mb-1 color-primary">Instagram</p>
                            <a href="https://www.instagram.com/yaszavellia/" class="h6 text-decoration-none fs-sm fw-bold color-primary">@yaszavellia <i class="bi bi-instagram ms-1"></i></a>
                        </div>
                        <div class="col-lg-3">
                            <p class="fs-s-sm mb-1 color-primary">Email</p>
                            <a href="mailto:zakamaragames@gmail.com" class="h6 text-decoration-none fs-sm fw-bold color-primary">yszavlla@gmail.com <i class="bi bi-envelope-at ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr class="mx-lg-5 mx-3 ">
    
    {{-- dekstop responsive  --}}
    <section id="about">
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
                            <p class="fs-s-sm mb-1 color-primary">Location</p>
                            <h6 class="fs-sm fw-bold color-primary"><img src="{{asset('img/location.png')}}" width="23" alt="location" class="me-1"> Tokyo, Japan</h6>
                        </div>
                        <div class="col-lg-3">
                            <p class="fs-s-sm mb-1 color-primary">Website</p>
                            <a href="https://www.iyaszanime.site" class="h6 text-decoration-none fs-sm fw-bold color-primary">iyaszanime.site <i class="bi bi-globe ms-1"></i></a>
                        </div>
                        <div class="col-lg-3">
                            <p class="fs-s-sm mb-1 color-primary">Instagram</p>
                            <a href="https://www.instagram.com/yaszavellia/" class="h6 text-decoration-none fw-bold fs-sm color-primary">@yaszavellia <i class="bi bi-instagram ms-1"></i></a>
                        </div>
                        <div class="col-lg-3">
                            <p class="fs-s-sm mb-1 color-primary">Email</p>
                            <a href="mailto:zakamaragames@gmail.com" class="h6 text-decoration-none fw-bold fs-sm color-primary">yszavlla@gmail.com <i class="bi bi-envelope-at ms-1"></i></a>
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
                        <button class="btn btn-primary fs-sm bg-transparent fw-bold border-0 rounded-1 color-primary"><i class="bi bi-plus"></i> Tambah Experience</button>
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
                                    <a href="" class="fs-s-sm text-decoration-none fw-bold color-primary">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="mx-lg-5 mx-3">
    <section id="project">
        <div class="container my-4">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12 d-lg-block d-md-block d-none">
                    <h6>Project</h6>
                </div>
                <div class="col-lg-9 col-12 ">
                    @if(Auth::user())
                    <div class="text-end mb-2">
                        <button class="btn btn-primary fs-sm bg-transparent fw-bold border-0 rounded-1 color-primary"><i class="bi bi-plus"></i> Tambah Project</button>
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