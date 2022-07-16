@extends("layouts.app")

@section("title", "| About Us")

@section("content")
  
  <main>
    <x-banner 
      imgSrc="images/Banner.png"
      title="<span>About</span> <span>Us</span>" 
      message="At ANIDA, we are individuals who believe that it takes more than passion and being intentional to create a world of difference."
    />
    <section class="boxes container">
      <div class="box">
        <div class="box-img-container">
          <img src="{{ asset("images/Box1.png") }}" alt="ANIDA's vision image">
        </div>
        <div class="box-message-container">
          <h2 class="box-message-title">Vision</h2>
          <hr>
          <p class="box-message-content">Creating opportunity through access to education.</p>
        </div>
      </div>
      <div class="box">
        <div  class="box-img-container">
          <img src="{{ asset("images/Box2.png") }}" alt="ANIDA's mission image">
        </div>
        <div class="box-message-container">
          <h2 class="box-message-title">Mission</h2>
          <hr>
          <p class="box-message-content">An international organization rooted in Christian values that creates opportunities through community-based projects for individuals facing a difficult reality.</p>
        </div>
      </div>
    </section>
  </main>
@endsection