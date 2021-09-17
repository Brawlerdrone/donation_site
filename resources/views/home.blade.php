@extends('master')
@section('content')
<section id="hero" class="d-flex justify-content-center align-items-center">
    <div id="heroCarousel"class="container carousel carousel-fade"
    data-ride="carousel">
    
    <div class="carousel-item active">
      <div class="carousel-container">
          <h2 class="animate__animated animate__backInDown">
              Let's Help
          </h2>
          <p class="animate__animated animate__fadeInUp">
            “Not all of us can do great things.
            But we can do small things with great love.”
          </p>
          <a href=""class="btn hero-btn animate__animated animate__backInUp">
            Mother Teresa
          </a>
      </div>
  </div>
 
  <div class="carousel-item">
    <div class="carousel-container">
        <h2 class="animate__animated animate__backInDown">
            Let's Donate
        </h2>
        <p class="animate__animated animate__fadeInUp">
          “Generosity consists not the sum given,
          But the manner in which it is bestowed”
        </p>
        <a href=""class="btn hero-btn animate__animated animate__backInUp">
            Mahatma Gandhi
        </a>
    </div>
</div>

  <div class="carousel-item">
    <div class="carousel-container">
        <h2 class="animate__animated animate__backInDown">
          Grow Gratitude
        </h2>
        <p class="animate__animated animate__fadeInUp">
            "All we need is to build human relations with our deeds.
             That's only thing that lasts forever"
        </p>
        <a href=""class="btn hero-btn animate__animated animate__backInUp">
            Nana Patekar
        </a>
    </div>
</div>

<a class="carousel-control-prev"href="#heroCarousel"role="button"
        data-slide="prev">
        <span class="carousel-control-prev-icon fas fa-chevron-left"aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    
    </a>
    <a class="carousel-control-next"href="#heroCarousel"role="button"
        data-slide="next">
        <span class="carousel-control-next-icon fas fa-chevron-right"aria-hidden="true"></span>
        <span class="sr-only">Next</span>
</a>
    
    </div>
  </section>
  
   
@endsection
