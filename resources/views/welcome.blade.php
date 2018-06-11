<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">


        <!-- Styles -->
        <style>
            .fraud {
                padding: 0px 10%;
            }

            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                /*font-weight: 100;*/
                font-weight: 800;
                height: 100vh;
                margin: 0;
            }
            #app .content h4 {
                font-weight: 800;
            }
            #app .content h6 {
                font-weight: 800;
                font-size: 24px;
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
                font-size: 84px;
            }
            @media (max-width: 767px) {
                .title {
                    font-size: 46px;
                    margin: 20px 5px;
                    margin-top: 150px;
                }
                .fraud {
                    padding: 0px 5%;
                }
                .fraud h4 {
                    font-size: 38px!important;
                }
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height" id="app">
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
                    <a href="http://bradweldy.com">BradWeldy.com</a>
                </div>
                {{-- <div id="nelson" class="fraud"><p>If you are a developer and would like to know more about this domain, or my past experience with:</p><h6>Mr. Nelson Tovar</h6><p>A quick inspection of this page can shed light on your curiosity.</p><p>OR</p><h6 style="font-size: 20px;">Run the function 'myExperience'</h6><p>P.S. js is enabled on this site :)</div> --}}
            </div>
        </div>

        <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/myExperience.js')}}" type="text/javascript"></script>
    </body>
</html>
