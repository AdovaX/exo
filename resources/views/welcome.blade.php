<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
        @media screen and (min-width : 768px)   {
         .title {
              font-size: 84px;
              font-weight: bold;
          }
        }

        @media screen and (max-width: 600px) {
          .title {
              font-size: 44px;
              font-weight: bold;
          }

        }
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 74px;
                font-weight: bold;
                color: black;
            }

            .links > a {
                color: black;
                padding: 0 25px;
                font-size: 12px;
                font-weight: bold;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .links p{
              color: black;
              font-weight: 500;
              font-family: initial;
            }

            .m-b-md {
                margin-bottom: 30px;
            }.logo_home{
              width: 250px;
              display: block;
              margin: auto;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                       <!-- <a href="{{ route('register') }}">Register</a> -->
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                  <img src="{{URL::asset('/images/logo.jpg')}}" alt="" class="logo_home">
                    Exo | Online examination
                </div>

                <div class="links">
                  <p> " Simplified online examination experience " </p>
                </div>
            </div>
        </div>
    </body>
</html>
