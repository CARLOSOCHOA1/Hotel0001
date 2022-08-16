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
                <img src="img/log.png" alt="" width="114" height="38" class="d-inline-block align-text-top">
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
                        <a href="/Reserve" class="nav-link">To Reserve</a>
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
    <!-- Button_login -->
        <section id="top" class="bg-light text-dark p-5 p-lg-0 pt-lg-5 text-center text-sm-start text-md-center" >
            <div class="container">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <div class="text-start">
                        <a class="btn btn-secondary btn-lg" href="{{ route('login') }}">Join Now</a>
                    </div>
            </div>
        </section>
    <!-- End_Button_login -->




        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>


</body>

</html>