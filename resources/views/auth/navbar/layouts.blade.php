<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HUMAEHEALTH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="{{url('storage/img/huma_logo.png')}}" rel="icon">
        <link href="{{url('storage/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <!-- Template Main CSS File -->
    <link href="{{url('storage/css/style.css')}}" rel="stylesheet">
    <link href="{{url('storage/css/style2.css')}}" rel="stylesheet">
    <link href="{{url('storage/css/testimonial.css')}}" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-primary fixed-top">
        <div class="container">
            <img src="{{url('storage/img/huma_logo.png')}}" class="logo">
          <a class="navbar-brand text-white" href="{{ URL('/') }}"><span style=" font-size: 35px;"><strong>HUMAEHEALTH</strong></span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav  ms-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('aboutus')) ? 'active' : '' }}" href="{{ route('aboutus') }}" >About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('humaehealth')) ? 'active' : '' }}" href="{{ route('humaehealth') }}">HumaTeleHealth</a>
                    </li>
                    <li class="nav-item">
                    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Sign-Up
                            </a>
                            <ul class="dropdown-menu " aria-labelledby="navbarDarkDropdownMenuLink">
                            <a class="nav-link {{ (request()->is('register')) ? 'active' : '' }} " href="{{ route('register') }}">Signup User</a>
                                <a class="nav-link {{ (request()->is('signup')) ? 'active' : '' }}" href="{{ route('signup') }}">Signup Provider</a>
                            </ul>
                            </li>
                        </ul>
                    </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('login')) ? 'active' : '' }}" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('rourcoins')) ? 'active' : '' }}" href="{{ route('ourcoins') }}">Our Coins</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('pricing')) ? 'active' : '' }}" href="{{ route('pricing') }}">Pricing</a>
                    </li>
                    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Language<i class="bi bi-chevron-down"></i>
                            </a>
                            <ul class="dropdown-menu text-start" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li class="nav-item"><a href="">English</a><img src="https://img.icons8.com/color/36/00000/usa.png" style="position:relative; left: 24px;"></li>
                            <li class="nav-item"><a href="">Spanish</a><img src="https://img.icons8.com/color/36/00000/spain.png" style="position:relative; left: 20px;"></li>
                            <li class="nav-item"><a href="">Chinese</a><img src="https://img.icons8.com/color/36/00000/china.png" style="position:relative; left: 20px;"></li>
                            <li class="nav-item"><a href="">Arabic</a><img src="{{url('storage/img/arabic.png')}}/" width="22%" style="position:relative; left: 30px;"></li>
                            <li class="nav-item"><a href="">French</a><img src="https://img.icons8.com/color/36/00000/france.png" style="position:relative; left: 26x;"></li>
                            <li class="nav-item"><a href="">Russian</a><img src="https://upload.wikimedia.org/wikipedia/commons/f/f3/Flag_of_Russia.svg"width="22%" style="position:relative; left: 21px;"></li>
                            <li class="nav-item"><a href="">Italian</a><img src="https://img.icons8.com/color/36/00000/italy.png" style="position:relative; left: 30px;"></li>
                            <li class="nav-item"><a href="">Portuguese</a><img src="https://img.icons8.com/color/36/00000/portugal.png" style="position:relative;"></li>
                            <li class="nav-item"><a href="">Japanese</a><img src="https://img.icons8.com/color/36/00000/japan.png" style="position:relative; left: 20px;"></li>
                            <li class="nav-item"><a href="">German</a><img src="https://img.icons8.com/color/36/00000/germany.png" style="position:relative; left: 20px;"></li>
                            <li class="nav-item"><a href="">Korean</a><img src="https://upload.wikimedia.org/wikipedia/commons/0/09/Flag_of_South_Korea.svg"width="22%" style="position:relative; left: 20px;"></li>
                            <li class="nav-item"><a href="">Hindi</a><img src="https://img.icons8.com/color/36/00000/india.png" style="position:relative; left: 20px;"></li>
                            </ul>
                            </li>
                        </ul>
                    </div>
                @else    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                            >Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                        </li>
                        </ul>
                    </li>
                @endguest
            </ul>
          </div>
        </div>
    </nav>    
    <div class="container">
        @yield('content')
    </div>
       
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>    

<!-- Vendor JS Files -->
<script src="{{url('storage/vendor/aos/aos.js')}}"></script>
<script src="{{url('storage/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('storage/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{url('storage/vendor/php-email-form/validate.js')}}"></script>


<!-- Template Main JS File -->
<script src="{{url('storage/js/main.js')}}"></script>
<script src="{{url('storage/js/show-hide.j')}}"></script>
<script src="{{url('storage/js/payform.js')}}" charset="utf-8"></script>

<script>
  payform.cardNumberInput(document.getElementById('ccnum'));
  payform.expiryInput(document.getElementById('expiry'));
  payform.cvcInput(document.getElementById('cvc'));
  payform.numericInput(document.getElementById('numeric'));
</script>
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
</body>
</html>