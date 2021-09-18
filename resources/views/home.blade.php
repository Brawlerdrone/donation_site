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

  <!--ABOUT-->
  <section class="about-section mt-5" id="about">
    <div class="container">
        <div class="text-center " >
            <h2 class="section-heading text-uppercase font-weight-bold">About</h2>
            <h3 class="section-subheading text-muted">
              We make a living by what we get, but we make a life by what we give.</h3>
        </div>
        <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container-fluid">
  
          <div class="row">
            <div class="col-xl-5 col-lg-6 d-flex justify-content-center align-items-stretch" >
               <img src="Images/img3.jpg" class="img-fluid" >
            </div>
  
            <div class="col-xl-7 col-lg-6 d-flex flex-column align-items-stretch justify-content-center py-3 px-lg-5" >
              <h4 class="initial">Lorem ipsum dolor sit amet consectetur adipisicing elit</h4>
               <p><br> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex, quod esse illo veniam inventore repudiandae sunt sed aut qui laborum.
                 Labore iusto a est adipisci? Perferendis eveniet laborum quae eius.
                 Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod, distinctio. Maiores, quaerat! Aliquid error fuga eos voluptates, in natus earum distinctio atque magnam, 
                 optio consectetur velit esse sit voluptatum nulla?
  
            
                </p>
            </div>
          </div>
        </div>
      </section>
  
   
@endsection
