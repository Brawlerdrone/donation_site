<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- =====CSS===== -->
    <link rel="stylesheet" href="{{URL::asset('css/main.css')}}">
     <!-- =====BOOTSTRAP===== -->
    <link rel="stylesheet" href="{{URL::asset('css/app.css')}}">
    <!-- =====FONTAWESOMEICONS===== -->
    <script src="https://kit.fontawesome.com/75c7cbc9da.js" crossorigin="anonymous"></script>
    <title>WingsofAdove</title>
</head>
<body>
    
        <header class = "bg-dark">
            <ul class = "nav justify-content-end">
                <li class = "nav-item contact__detail">
                    <p>email</p>
                </li>
                <li>
                    <p>contact us: </p>
                </li>
            </ul>
        </header>
       <!-- <nav class = "navbar bg-white">
        
            <div class = "img__container">
                <a  href>
                    <img src=alt="">
                </a>

            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
           
            <ul class = "nav pages-link collapse navbar-collapse" id = "navbarTogglerDemo02">
                <li class = "nav-item">
                    <a class ="text-dark" href=>Our Story</a>
                </li>
                <li class = "nav-item">
                    <a class ="text-dark" href="">Mission</a>
                </li>
                <li class = "nav-item">
                    <a class ="text-dark" href="">Projects</a>
                </li>
                <li class = "nav-item">
                    <a class ="text-dark" href="">Donate</a>
                </li>
                <li class = "nav-item">
                    <a class ="text-dark" href="">Volunteer</a>
                </li>
            </ul>
    

        </nav>-->
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class=" container">
                <div class = "img__container">
                    <a  href>
                        <img src="{{url::asset('images/wingsofadove.jpg')}}" alt="">
                    </a>
                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                
                
                <div class="collapse navbar-collapse  pages-link" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class = "nav-item">
                            <a class ="text-dark" href="">Our Story</a>
                        </li>
                        <li class = "nav-item">
                            <a class ="text-dark" href="">Mission</a>
                        </li>
                        <li class = "nav-item">
                            <a class ="text-dark" href="">Projects</a>
                        </li>
                        <li class = "nav-item">
                            <a class ="text-dark" href="">Donate</a>
                        </li>
                        <li class = "nav-item">
                            <a class ="text-dark" href="">Volunteer</a>
                        </li>
                    </ul>
                </div>
               
            </div>
        </nav>
    
        @yield('content')
   
        <footer>
            
        </footer>

   

    <!--===== SCROLL REVEAL =====-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <! --==== JAVASCRIPT =====->
    <script src = "{{URL::asset('js/app.js')}}"></script>
    <script src = "{{URL::asset('js/main.js')}}"></script>

</body>
</html>