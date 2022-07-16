@props([
    "imgSrc" => $imgSrc,
    "title" => $title,
    "message" => $message
])

<section class="banner">
    <div class="banner-img-container">
      <img src="{{ asset($imgSrc) }}" alt="About us banner image">
    </div>
    <div class="banner-message-container">
      <h1 class="banner-message-title">
        {!! html_entity_decode($title) !!}
      </h1>
      <hr>
      <p class="banner-message-content">{{$message}}</p>
    </div>
</section>