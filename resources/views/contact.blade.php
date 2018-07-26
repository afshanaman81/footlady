<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>The Footlady</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

        <!-- Styles -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <img src="images/logo.png" class="logo">The Footlady
                </div>

                <div class="links">
                    <a href="{{ url('/')}}">Home</a>
                    <a href="{{ url('/services')}}">Services</a>
                    <a href="{{ url('/facts')}}">Facts & Information</a>
                    <a href="{{ url('/testimonials')}}">Testimonials</a>
                    <a href="{{ url('/contact-me')}}">Contact Me</a>                
                </div>

                <div id="app" class="vue-component">
                    <h1>Contact Me</h1>
                    <example />
                </div>
            </div>
        </div>

        <script type="text/javascript" src="js/app.js"></script>
    </body>
</html>
