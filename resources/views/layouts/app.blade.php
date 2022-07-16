<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ANIDA @yield("title")</title>
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&family=Raleway&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset("css/style.css") }}">
  <script defer src="{{ asset("js/script.js") }}"></script>
</head>
<body>
  <header>
    <x-navbar />
  </header>

  @yield("content")
  
</body>
</html>