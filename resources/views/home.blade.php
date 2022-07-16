@extends("layouts.app")

@section("content")
  
  <main class="container" style="padding: 20px;">
    <h1>Take Home Assessment</h1>
    <hr>
    <p>Company: <a href="https://www.anida.org/" target="_blank">ANIDA</a></p>
    <p>Position: Front End Volunteer</p>
    <p>Due Date: Sunday, July 17, 2022</p>
    <hr>
    <p>Candidate Name: Jason Xie</p>
    <p>Candidate Email: <a href="mailto:thejasonxie@gmail.com">thejasonxie@gmail.com</a></p>
    <p>Candidate Portfolio: <a href="https://jasonxie.dev/" target="_blank">https://jasonxie.dev/</a></p>
    <p>Candidate Github Repo: <a href="https://github.com/thejasonxie" target="_blank">https://github.com/thejasonxie</a></p>
    <hr>
    <p>Source Code: <a href="https://github.com/thejasonxie/anida-about-us" target="_blank">https://github.com/thejasonxie/anida-about-us</a></p>
    <p>Result: <a href="{{ route("about") }}">About Us</a> or use navigation bar.</p>
    <p>Submission Date: Saturday, July 16, 2022</p>
  </main>
  
@endsection