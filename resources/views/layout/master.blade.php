<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{URL::asset('css/main.css')}}">
    <script src="https://kit.fontawesome.com/6f94fabf83.js" crossorigin="anonymous"></script>

   
    <title> Wings of a dove</title>
</head>
<body>

    <div class="wrapper">
    {{-- WRAPPER START --}}

       {{-- NAVIGATION --}}
       
        <nav class="main-nav ">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="{{'mission'}}">Mission</a></li>
                <li><a href="{{'projects'}}">Projects</a></li>
                <li><a href="{{'donate'}}">Donate</a></li>
                <li><a href="{{'volunteer'}}">Volunteer</a></li>
                <li><a href="{{'gallery'}}">Gallery</a></li>
                <li><a href="{{'contact'}}">Contact</a></li>
            </ul>
        </nav>
      
  
        {{-- END OF NAVIGATION --}}
        @yield('content')
        <script>

            function initMap() {
                var location = {lat: -25.363, lng: 131.044};
                var map = new google.maps.Map(document.getElementById("map"),{
                    zoom :4,
                    center: location
                });
                var marker = new google.maps.Marker({
                    position : location,
                    map : map
                });
            }    
        </script>
        <script async defer src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyA-Gcuxg13f7jO410_y0IIDd2sYSLPJcfo&callback=initMap"></script>
        <footer>
            
            
        </footer>

    </div>
    

    
</body>
</html>