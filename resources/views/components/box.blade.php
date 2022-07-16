@props([
    "imgSrc" => $imgSrc,
    "title" => $title,
    "message" => $message
])

<div class="box">
    <div class="box-img-container">
      <img src="{{ asset($imgSrc) }}" alt="{{$title}} image">
    </div>
    <div class="box-message-container">
      <h2 class="box-message-title">{{ $title }}</h2>
      <hr>
      <p class="box-message-content">{{ $message }}</p>
    </div>
</div>