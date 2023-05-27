<!doctype html>
<html lang="en">

<head>
  <title>Portfolio - Muhammad Ilyasa</title>
  <!-- Required meta tags -->
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

  <div class="loader">
      <div class="row w-100">
        <div class="col-4 p-0">
          <div class="loader-view slider1"></div>
        </div>
        <div class="col-4 p-0">
          <div class="loader-view slider2"></div>
        </div>
        <div class="col-4 p-0">
        <div class="loader-view slider3"></div>
      </div>
    </div>
  </div>

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
                       <a class=" dropdown-toggle" href="#" id="profilDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           <img src="{{ asset('img/wangybat.png') }}" width="30" class="rounded-circle" alt="">
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