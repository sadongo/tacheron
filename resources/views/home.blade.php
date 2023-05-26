@extends('layouts.header')

@section('title')
  Home
@endsection
@section('content')

<style>


    .hero-image {
        width: 100%;
        height: 100vh; /* Ajustez la hauteur selon vos besoins */
    }

    .image-container {
  position: relative;
}

.image-container .overlay {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}


h1 {
  animation-duration: 5s;
  animation-name: slidein;

}

@keyframes slidein {
  from {
    margin-left: 100%;
    width: 300%;
  }

  to {
    margin-left: 0%;
    width: 100%;
  }
}

</style>
<div class="image-container">
    <img class="hero-image" src="{{ asset('assets/images/bg1.jpg') }}" alt="Image d'accueil">
    <div class="overlay">
        <h1 class="text-white mb-3 banner-bg-slider-title">Laissez-vous guider !</h1>

</div>
</div>


@endsection
