@extends("layouts.app")

@section("title", "| About Us")

@section("content")
  
  <main>
    <section class="banner">
      <div>
        <img src="{{ asset("images/Banner.png") }}" alt="About us banner image">
      </div>
      <div>
        <h1>
          <span>About</span>
          &nbsp;
          <span>Us</span>
        </h1>
        <hr>
        <p>At ANIDA, we are individuals who believe that it takes more than passion and being intentional to create a world of difference.</p>
      </div>
    </section>
    <section class="boxes container">
      <div class="box1">
        <div>
          <img src="{{ asset("images/Box1.png") }}" alt="ANIDA's vision image">
        </div>
        <div>
          <h2>Vision</h2>
          <hr>
          <p>Creating opportunity through access to education.</p>
        </div>
      </div>
      <div class="box2">
        <div>
          <img src="{{ asset("images/Box2.png") }}" alt="ANIDA's mission image">
        </div>
        <div>
          <h2>Mission</h2>
          <hr>
          <p>An international organization rooted in Christian values that creates opportunities through community-based projects for individuals facing a difficult reality.</p>
        </div>
      </div>
    </section>
  </main>
@endsection