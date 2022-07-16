@extends("layouts.app")

@section("content")
  
  <main class="container" style="padding: 20px;">
    <h1>Take Home Assessment</h1>
    <hr>
    <p>Company: ANIDA</p>
    <p>Position: Front End Volunteer</p>
    <p>Due Date: Sunday, July 17, 2022</p>
    <hr>
    <p>Candidate Name: Jason Xie</p>
    <p>Candidate Email: <a href="mailto:thejasonxie@gmail.com">thejasonxie@gmail.com</a></p>
    <p>Candidate Portfolio: <a href="https://jasonxie.dev/" target="_blank">https://jasonxie.dev/</a></p>
    <p>Candidate Github Repo: <a href="https://github.com/thejasonxie" target="_blank">https://github.com/thejasonxie</a></p>
    <hr>
    <p>Result: <a href="{{ route("about") }}">About Us</a> or use navigation bar.</p>
    <p>Submission Date: Saturday, July 16, 2022</p>
  </main>
  
@endsection