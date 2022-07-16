<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ANIDA @yield("title")</title>
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Raleway&display=swap" rel="stylesheet"> 
  
  <link rel="stylesheet" href="{{ asset("css/style.css") }}">
  <script defer src="{{ asset("js/script.js") }}"></script>
</head>
<body>
  <header>
    <nav>
      <div class="container navbar-container">
        <section class="navbar-header">
          <div class="navbar-header-container">
            <a href="{{ route("home")}}">
              <img src="{{ asset("images/Logo.png") }}" alt="ANIDA logo">
            </a>
          </div>
        </section>
        <section class="navbar-menu">
          <ul class="navbar-menu-list">
            <li class="navbar-menu-item">
              <a href="{{ route("home") }}">Home</a>
            </li>
            <li class="navbar-menu-item">
              <a href="{{ route("about") }}">About Us</a>
            </li>
          </ul>
        </section>
        <section class="navbar-hamburger">
          <button class="navbar-hamburger-btn">
            <span class="hamburger-bar1"></span>
            <span class="hamburger-bar1"></span>
            <span class="hamburger-bar1"></span>
          </button>
        </section>
      </div>
    </nav>
  </header>

  @yield("content")
  
</body>
</html>