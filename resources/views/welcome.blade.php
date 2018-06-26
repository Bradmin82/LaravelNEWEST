<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
	    
	  <!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-KBWTLFR');</script>
	<!-- End Google Tag Manager -->  
	    
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Rancho Web Designs</title>
        <!-- Meta -->
	    <meta name="description" content="Rancho Web Designs | Web Development | SEO">
		<link rel="canonical" href="https://ranchowebdesigns.com/">
		<meta property="og:locale" content="en_US">
		<meta property="og:type" content="website">
		<meta property="og:title" content="Rancho Web Designs | Web Development | SEO">
		<meta property="og:description" content="Rancho Web Designs | Web Development | SEO">
		<meta property="og:url" content="https://ranchowebdesigns.com/">
		<meta property="og:site_name" content="Rancho Web Designs">

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
            .title img {
	            max-width:200px; display: inline-block; z-index: 99;
	            filter: drop-shadow(-30px 10px 60px #fff);
            }
            .title h1 {
				display:inline-block;font-size:60px; font-weight:600;vertical-align: middle; z-index: 99;
				filter: drop-shadow(-30px 10px 20px #fff);
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
                z-index: 2;
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
                    flex-direction: column;
                }
                .title img {
	                display: block;
	                z-index: 99;
                }
                .title h1 {
	                display:block;
	                z-index: 99;
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
            #hpbg {
	            position: absolute;
			    right: 0;
			    bottom: 0;
			    min-width: 100vw; 
			    min-height: 100vh;
			    z-index: 1;
			}
            #hpbg iframe {
	            position: absolute;
			    right: 0;
			    bottom: 0;
			    min-width: 100vw; 
			    min-height: 100vh;
			    z-index: 1;
/* 			    display: none; */
            }
            #hpbg #player {
	            position: absolute;
			    right: 0;
			    bottom: 0;
			    min-width: 100vw; 
			    min-height: 100vh;
			    z-index: 1;
				filter: grayscale(75%);
            }
            .overlay {
			    position: fixed;
			    right: 0;
			    bottom: 0;
			    min-width: 100vw; 
			    min-height: 100vh;
			    z-index: 2;
			}
        </style>
    </head>
    <body>

	    <!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KBWTLFR"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->

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
                <div class="title m-b-md flex-center">
	                <div id="hpbg">
{{--                 	
						<video autoplay muted loop id="myVideo">
							<source src="#" type="video/mp4">
						</video>
	--}}					
{{--						<iframe width="480" height="270" src="https://www.youtube.com/embed/ParkVumHd0s?autoplay=1&loop=1&rel=0&controls=0&modestbranding=0&showinfo=0" frameborder="0" allow="autoplay;" allowfullscreen></iframe>
--}}
						<div class="overlay"></div>
						<div id="player"></div>

					</div>
<!--					    <a class="is-paddingless brand-item" href="/"> -->
					   <img src="{{asset('images/RanchoWebDesigns-logo.png')}}" alt="Rancho Web Designs logo" />
					   <h1>Rancho Web Designs</h1>
<!-- 				    </a> -->
					
					
                </div>
            </div>
        </div>

        <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
        <script type="text/javascript">
	        // Loads the YouTube IFrame API JavaScript code.
			var tag = document.createElement('script');
			tag.src = "https://www.youtube.com/iframe_api";
			// Inserts YouTube JS code into the page.
			var firstScriptTag = document.getElementsByTagName('script')[0];
			firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
			
			var player;
			
			// onYouTubeIframeAPIReady() is called when the IFrame API is ready to go.
			function onYouTubeIframeAPIReady() {
			  player = new YT.Player('player', {
			    videoId: 'ParkVumHd0s', // the ID of the video (mentioned above)
			    playerVars: {
			      autoplay: 1, // start automatically
			      controls: 0, // don't show the controls (we can't click them anyways)
			      modestbranding: 0, // show smaller logo
			      rel: 0,
			      showinfo: 0,
			      loop: 1, // loop when complete
			      playlist: 'kNizPk7xBbs' // required for looping, matches the video ID
			    }
			  });
			}

			function screenMax() {
				// vanilla JS window width and height
				var w=window,
				d=document,
				e=d.documentElement,
				g=d.getElementsByTagName('body')[0],
				x=w.innerWidth||e.clientWidth||g.clientWidth,
				y=w.innerHeight||e.clientHeight||g.clientHeight;
				console.log('w: ' + x + '; y: ' + y);
				
				var player = document.getElementById('player');
				x = (x * 1.3343) / 2;
				console.log('w: ' + x + '; y: ' + y);
				player.style.width = x;
				player.style.height = y;
			}
			screenMax();
			window.addEventListener("resize", function(){
				screenMax();
			});
// 			$(document).ready(function(){
		    // - 1.3343 is the aspect ratio of the video
		    // - This will work if your video is 1920 x 1080
		    // - To find this value divide the video's native width by the height eg 1920/1080 = 1.78
/*
		    var aspectRatio = 1.3343;
		
		    var video = $('#videoWithJs iframe');
		    var videoHeight = video.outerHeight();
		    var newWidth = videoHeight*aspectRatio;
		    var halfNewWidth = newWidth/2;
		
		    video.css({"width":newWidth+"px","left":"50%","margin-left":"-"+halfNewWidth+"px"});
		
		});
*/
	    </script>
    </body>
</html>
