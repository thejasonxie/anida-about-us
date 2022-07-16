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
      <x-box
        imgSrc="images/Box1.png"
        title="Vision"
        message="Creating opportunity through access to education."
      />
      <x-box
        imgSrc="images/Box2.png"
        title="Mission"
        message="An international organization rooted in Christian values that creates opportunities through community-based projects for individuals facing a difficult reality."
      />
    </section>
    
  </main>
@endsection