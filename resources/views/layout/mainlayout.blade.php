<!doctype html>
<html lang="en">

<head>
  <title>Portfolio - Muhammad Ilyasa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.css">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body>

  <div class="loader d-flex justify-content-center align-items-center">
    <h1 id="text-animation-loader" class="position-absolute text-white">Avellia Family</h1>
  </div>

<!-- Modal create project -->
<div class="modal fade" id="projectModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add <span class="color-primary">Project</span></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/project" method="post" enctype="multipart/form-data">
        @csrf
      <div class="modal-body">
          <div class="mb-3 mt-2">
            <label class="mb-1 fs-s-sm opacity-75">Thumbnail</label>
            <input type="file" name="gambar" id="" value="" required class="form-control fs-s-sm @error('gambar') is-invalid @enderror">
            @error('gambar') <p class="fs-s-sm text-danger">{{$message}}</p> @enderror
          </div>
          <div class="mb-3 mt-2">
            <label class="mb-1 fs-s-sm opacity-75">Name</label>
            <input type="text" name="name" id="" value="" required class="form-control fs-s-sm @error('name') is-invalid @enderror">
            @error('name') <p class="fs-s-sm text-danger">{{$message}}</p> @enderror
          </div>
          <div class="mb-3 mt-2">
            <label class="mb-1 fs-s-sm opacity-75">Description</label>
            <input type="text" name="description" id="" value="" required class="form-control fs-s-sm @error('description') is-invalid @enderror">
            @error('description') <p class="fs-s-sm text-danger">{{$message}}</p> @enderror
          </div>
          <div v class="mb-3 mt-2">
            <label class="mb-1 fs-s-sm opacity-75">Category</label>
            <select required name="category" id="" class="form-select fs-s-sm @error('description') is-invalid @enderror">
              <option selected disabled>Choose On Option</option>
              <option value="1">Website</option>
              <option value="2">Web App</option>
              <option value="3">Dekstop</option>
            </select>
            @error('category') <p class="fs-s-sm text-danger">{{$message}}</p> @enderror
          </div>
          <div class="mb-3 mt-2">
            <label class="mb-1 fs-s-sm opacity-75">Github Repository</label>
            <input required type="text" name="github_url" id="" value="" class="form-control fs-s-sm @error('github_url') is-invalid @enderror">
            @error('github_url') <p class="fs-s-sm text-danger">{{$message}}</p> @enderror
          </div>
          <div class="mb-3 mt-2">
            <label class="mb-1 fs-s-sm opacity-75">Start Date</label>
            <input required type="date" name="start_date" id="" value="" class="form-control fs-s-sm @error('start_date') is-invalid @enderror">
            @error('start_date') <p class="fs-s-sm text-danger">{{$message}}</p> @enderror
          </div>
          <div class="mb-3 mt-2">
            <label class="mb-1 fs-s-sm opacity-75">Finish Date</label>
            <input required type="date" name="finish_date" id="" value="" class="form-control fs-s-sm @error('finish_date') is-invalid @enderror">
            @error('finish_date') <p class="fs-s-sm text-danger">{{$message}}</p> @enderror
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary fs-s-sm border-0 rounded-1" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary fs-s-sm border-0 rounded-1">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal update project -->
<div class="modal fade" id="projectUpdateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit <span class="color-primary">Project</span></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/project/" method="post" enctype="multipart/form-data" id="formProjectUpdate">
        @csrf
        @method('put')
      <div class="modal-body">
          <div class="mb-3 mt-2">
            <label class="mb-1 fs-s-sm opacity-75">Thumbnail</label>
            <div class="text-center">
              <label class="my-2"><img src="" class="imgUpdateProject" width="270" alt=""></label>
            </div>
            <input type="file" name="gambar" id="" value="" class="form-control fs-s-sm @error('gambar') is-invalid @enderror">
            @error('gambar') <p class="fs-s-sm text-danger">{{$message}}</p> @enderror
          </div>
          <div class="mb-3 mt-2">
            <label class="mb-1 fs-s-sm opacity-75">Name</label>
            <input type="text" name="name" value="" id="editNameProject" required class="form-control projectNameUpdate fs-s-sm @error('name') is-invalid @enderror">
            @error('name') <p class="fs-s-sm text-danger">{{$message}}</p> @enderror
          </div>
          <div class="mb-3 mt-2">
            <label class="mb-1 fs-s-sm opacity-75">Description</label>
            <input type="text" name="description" id="editDescProject" value="" required class="form-control editDescProject fs-s-sm @error('description') is-invalid @enderror">
            @error('description') <p class="fs-s-sm text-danger">{{$message}}</p> @enderror
          </div>
          <div v class="mb-3 mt-2">
            <label class="mb-1 fs-s-sm opacity-75">Category</label>
            <select required name="category" id="editCategoryProject" class="form-select editCategoryProject fs-s-sm @error('description') is-invalid @enderror">
              <option selected disabled>Choose On Option</option>
              <option value="1">Website</option>
              <option value="2">Web App</option>
              <option value="3">Dekstop</option>
            </select>
            @error('category') <p class="fs-s-sm text-danger">{{$message}}</p> @enderror
          </div>
          <div class="mb-3 mt-2">
            <label class="mb-1 fs-s-sm opacity-75">Github Repository</label>
            <input type="text" name="github_url" id="githubProjectUpdate" value="" class="form-control fs-s-sm @error('github_url') is-invalid @enderror">
            @error('github_url') <p class="fs-s-sm text-danger">{{$message}}</p> @enderror
          </div>
          <div class="mb-3 mt-2">
            <label class="mb-1 fs-s-sm opacity-75">Start Date</label>
            <input required type="datetime-local" id="editStartProject" name="start_date" id="" value="" class="form-control fs-s-sm @error('start_date') is-invalid @enderror">
            @error('start_date') <p class="fs-s-sm text-danger">{{$message}}</p> @enderror
          </div>
          <div class="mb-3 mt-2">
            <label class="mb-1 fs-s-sm opacity-75">Finish Date</label>
            <input required type="datetime-local" id="editFinishProject" name="finish_date" id="" value="" class="form-control fs-s-sm @error('finish_date') is-invalid @enderror">
            @error('finish_date') <p class="fs-s-sm text-danger">{{$message}}</p> @enderror
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary fs-s-sm border-0 rounded-1" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary fs-s-sm border-0 rounded-1">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal update status -->
@if(Auth::user())
<div class="modal fade" id="updateStatus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit <span class="color-primary">Status</span></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/status/update/{{$author->id}}" method="post" enctype="multipart/form-data" id="formProjectUpdate">
        @csrf
        @method('put')
      <div class="modal-body">
          <div class="mb-3 mt-2">
            <label class="mb-1 fs-s-sm opacity-75">Name</label>
            <div class="input-group mb-3">
              <span class="input-group-text" id="emoteButton">{{$author->emote}}</span>
              <input type="text" class="form-control form-control-sm fs-s-sm  @error('content') is-invalid @enderror" value="{{$author->content}}" name="content" required>
            </div>
            @error('content') <p class="fs-s-sm text-danger">{{$message}}</p> @enderror
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary fs-s-sm border-0 rounded-1" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary fs-s-sm border-0 rounded-1">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endif

  <nav class="navbar navbar-expand-lg shadow-sm bg-white py-3 fixed-top">
    <div class="container">
      <a class="navbar-brand fw-bold color-primary" href="/" class="">Avellia's</a>
           <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
               aria-expanded="false" aria-label="Toggle navigation">
               <span class="bi bi-justify-left"></span>
           </button>
           <div class="collapse navbar-collapse" id="collapsibleNavId">
               @yield('navbar-menu')
               <ul class="navbar-nav ms-auto ps-3 ps-lg-auto mx-2">
                 @if(Auth::user())
                   <li class="nav-item dropdown">
                       <a class=" dropdown-toggle text-dark" href="#" id="profilDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           <img src="{{ asset('storage/gambar/'.Auth::user()->photo) }}" width="30" class="rounded-circle" alt="">
                       </a>
                       <ul class="dropdown-menu dropdown-menu-end rounded-1 shadow-sm ">
                         <li><a class="dropdown-item fs-s-sm py-2" href="/my-profil">My Profil</a></li>
                         <li><a class="dropdown-item fs-s-sm py-2" href="/logout">Log Out</a></li>
                       </ul>
                   </li>
                   @endif
               </ul>
           </div>
     </div>
   </nav>

    @yield('content')

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{asset('js/main.js')}}"></script>
</body>

</html> 