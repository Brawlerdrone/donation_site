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
            </ul>
        </nav>
      
  
        {{-- END OF NAVIGATION --}}
        @yield('content')




    </div>
    

    
</body>
</html>