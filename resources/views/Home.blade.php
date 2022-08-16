<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <title>Homepage</title>
</head>

<body>

    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#top">
                <!--<img src="img/log.png" alt="" width="114" height="38" class="d-inline-block align-text-top">-->
                <img src="img/hotelicon.png" alt="" width="114" height="70" class="d-inline-block align-text-top">
                <br>ReHotel
            </a>
            
            @if(Auth::user())
                   <h6 style="color: white;">Welcome  {{ Auth::user()->name }}</h6>
            @endif  

            <a id="navbarDropdown"  href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
               
             </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Nueva reservacion
                  </button>
                    </li>
                    <li class="nav-item">
                        <a href="/Booking" class="nav-link">Booking information</a>
                    </li>
                    <li class="nav-item">
                        <a href="/FAQ" class="nav-link">FAQ</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            About Us
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="">Mission</a></li>
                            <li><a class="dropdown-item" href="">Vision</a></li>
                            <li><a class="dropdown-item" href="">Values</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#sitemap">Sitemap</a></li>
                           
                     @if(Auth::user())
                     <li class="nav-item dropdown">
                               
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                     </form>
             </li>
                           @if(Auth::user()->tipo_usuario == 1 )
                              <li><a class="dropdown-item" href="/configuraciones">Usuarios</a></li>
                           @endif  
                    @endif
                        </ul>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End_Nav -->

    <br>
     <br>
      <br>
       <br>
    
    <!-- Section -->
    <section class="section1">
        <img src="img/hotel_fondo.jpeg" class="mw-100" alt="...">
        <div class="position-absolute top-50 start-50 translate-middle">
            <br>
            <br>
            <br>
            <br>
            <div class="container">
                <div class="row align-items-start">
                    <div class="col">
            </div>
            <a class="btn btn-secondary btn-lg" href="{{ route('login') }}">Join Now</a>
        </div>
        <br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11824.135881045768!2d-104.88239168489174!3d21.498525602479642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842736fd96a3cd23%3A0x1d12a7d3340bea40!2sHotel%20Real%20de%20Don%20Juan!5e1!3m2!1ses-419!2smx!4v1660542720950!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <!-- End_Section -->


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nueva reservacion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('booking.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Nombres</label>
                <input id="Nombres" name="Nombres" type="text" class="form-control" tabindex="1">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Apellidos</label>
                <input id="Apellidos" name="Apellidos" type="text" class="form-control" tabindex="2">
            </div>
            <div class="mb-3">
            <div class="col-md-4">
                <select id="estado" type="text" class="form-select">
                  <option selected>Estado</option>
                <option>Nayarit</option>
                 <option>All</option>
               </select>
               </div>
            </div>
            <div class="mb-3">
            <div class="col-md-4">
                <select id="Ciudad" type="text" class="form-select">
                  <option selected>Ciudad</option>
                <option>Tepic</option>
                 <option>All</option>
               </select>
               </div>
            </div>
            <div class="mb-3">
            <div class="col-md-4">
                <select id="Hotel" type="text" class="form-select">
                  <option selected>Hotel</option>
                <option>Real de don juan</option>
                 <option>All</option>
               </select>
               </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
       </form>
    </div>
  </div>
</div>
        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>


</body>

</html>