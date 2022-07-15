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
  
  <link rel="stylesheet" href="{{asset("css/style.css")}}">
</head>
<body>
  <header>
    <nav>
      <section>
      <a href="{{ route("home")}}">
        <img src="{{ asset("images/Logo.png") }}" alt="ANIDA logo">
      </a>
      </section>
      <section>
        <ul>
          <li><a href="{{ route("home") }}">Home</a></li>
          <li><a href="{{ route("about") }}">About Us</a></li>
        </ul>
      </section>
      <section>
        <div>
          <span></span>
          <span></span>
          <span></span>
        </div>
      </section>
    </nav>
  </header>

  @yield("content")
  
</body>
</html>