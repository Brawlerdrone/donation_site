<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
   
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/95846a88b2.js" crossorigin="anonymous"></script>
    <!-- GoogleFonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Animate.css -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />

    <title>Donation_site</title>
</head>
<body>
    <!--NAVIGATION BAR-->
    <nav class="navbar navbar-expand-lg navbar-light nav-bg fixed-top py-2"> 
        <div class="container">
            <a class="navbar-brand text-white" href="">Lorem</a>
            <button class="navbar-toggler navbar-toggler-right " type="button"
            data-toggle="collapse"data-target="#myNavbar"aria-controls="myNavbar"aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item active"><a class="nav-link scroll" href="/">Home</a></li>
                    <li class="nav-item "><a class="nav-link scroll" href="#about">About</a></li>
                    
                </ul>
            </div>
        </div>
    </nav>

    

@yield('content')

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" 
        crossorigin="anonymous"></script>
<script src = {{asset('js/app.js')}}></script>        
</body>
</html>