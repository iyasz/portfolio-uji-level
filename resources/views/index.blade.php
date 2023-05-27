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
                        <h2 id="name-author" class="fw-bolder mb-1">{{$author->name}}</h2>
                        <p class="fs-sm opacity-75 fw-bold">( {{$author->nickname}} )</p>
                    </div>
                </div>
                <div class="col-lg-4 col-12 d-flex align-items-center justify-content-lg-end justify-content-start">
                    <div class="">
                        <a href="https://www.linkedin.com/in/muhammad-ilyasa-465284246/" class="btn btn-primary fs-s-sm rounded-1 border-0"><i class="bi bi-chat-dots me-1"></i> Hire Me!</a>
                        <button id="btn-follow" class="btn btn-primary fs-s-sm rounded-1 border-0"><i class="bi bi-plus"></i> Follow</button>
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
                            <h6 class="fs-sm color-primary fw-bold">{{$author->detail->location}}</h6>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <p class="fs-s-sm mb-1 color-primary">Website</p>
                            <a href="{{$author->detail->website_url}}" class="h6 text-decoration-none fs-sm color-primary fw-bold">{{$author->detail->website_domain}} <i class="bi bi-globe ms-1"></i></a>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <p class="fs-s-sm mb-1 color-primary">Instagram</p>
                            <a href="{{$author->detail->instagram_url}}" class="h6 text-decoration-none fs-sm fw-bold color-primary">{{"@".$author->detail->instagram_id}} <i class="bi bi-instagram ms-1"></i></a>
                        </div>
                        <div class="col-lg-3">
                            <p class="fs-s-sm mb-1 color-primary">Email</p>
                            <a href="{{$author->detail->email_url}}" class="h6 text-decoration-none fs-sm fw-bold color-primary">{{$author->detail->email_address}} <i class="bi bi-envelope-at ms-1"></i></a>
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
                    <p class="fs-s-sm opacity-75">{{$author->detail->about}}</p>
                    <p class="fs-s-sm opacity-75">{{$author->detail->short_description}}</p>
                    <a href="https://www.linkedin.com/in/muhammad-ilyasa-465284246/" class="fs-s-sm text-decoration-none fw-bold color-primary">Read More</a>
                    <div class="row detail-profil mt-4 pt-3 pb-2 px-2 rounded-1 d-none d-lg-flex">
                        <div class="col-lg-3">
                            <p class="fs-s-sm mb-1 color-primary">Location</p>
                            <h6 class="fs-sm fw-bold color-primary"><img src="{{asset('img/location.png')}}" width="23" alt="location" class="me-1"> {{$author->detail->location}}</h6>
                        </div>
                        <div class="col-lg-3">
                            <p class="fs-s-sm mb-1 color-primary">Website</p>
                            <a href="{{$author->detail->website_url}}" class="h6 text-decoration-none fs-sm fw-bold color-primary">{{$author->detail->website_domain}} <i class="bi bi-globe ms-1"></i></a>
                        </div>
                        <div class="col-lg-3">
                            <p class="fs-s-sm mb-1 color-primary">Instagram</p>
                            <a href="{{$author->detail->instagram_url}}" class="h6 text-decoration-none fw-bold fs-sm color-primary">{{"@".$author->detail->instagram_id}} <i class="bi bi-instagram ms-1"></i></a>
                        </div>
                        <div class="col-lg-3">
                            <p class="fs-s-sm mb-1 color-primary">Email</p>
                            <a href="{{$author->detail->email_url}}" class="h6 text-decoration-none fw-bold fs-sm color-primary">{{$author->detail->email_address}} <i class="bi bi-envelope-at ms-1"></i></a>
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
                        <button class="btn btn-primary fs-sm bg-transparent fw-bold border-0 rounded-1 color-primary"><i class="bi bi-plus"></i> Add Experience</button>
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
                        <button class="btn btn-primary fs-sm bg-transparent fw-bold border-0 rounded-1 color-primary"><i class="bi bi-plus"></i> Add Project</button>
                    </div>
                    @endif
                    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item mx-1" role="presentation">
                          <button class="nav-link active color-primary fs-s-sm" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true">All</button>
                        </li>
                        <li class="nav-item mx-1" role="presentation">
                          <button class="nav-link color-primary fs-s-sm" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Website</button>
                        </li>
                        <li class="nav-item mx-1" role="presentation">
                          <button class="nav-link color-primary fs-s-sm" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Web App</button>
                        </li>
                        <li class="nav-item mx-1" role="presentation">
                          <button class="nav-link color-primary fs-s-sm" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Dekstop</button>
                        </li>
                      </ul>
                      <div class="tab-content " id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab" tabindex="0">
                            <div class="row image-container">
                                @foreach ($projectsAll as $data)
                                <div class="col-lg-6 col-12 gy-3">
                                    <img src="{{asset('img/wangybat.png')}}" class="animated-item" width="100%" height="390" alt="">
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">

                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">2.</div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">3.</div>
                      </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="mx-lg-5 mx-3">
@endsection