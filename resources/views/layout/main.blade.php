<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script> -->
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet"/>
    <link href="{{ asset("css/animate.min.css") }}" rel="stylesheet">
    <link href="{{ asset("css/aos.css") }}" rel="stylesheet">
    <link href="{{ asset("bootstrap/css/bootstrap.min.css") }}" rel="stylesheet">
    <link href="{{ asset("css/init.css") }}" rel="stylesheet">
    <link href="{{ asset("css/navbar.css") }}" rel="stylesheet">
    <link href="{{ asset("css/content.css") }}" rel="stylesheet">
    <link href="{{ asset("css/footer.css") }}" rel="stylesheet">
    
	<link href="{{ asset("css/flickerplate.css") }}"  type="text/css" rel="stylesheet">
	<link href="{{ asset("css/demo.css") }}"  type="text/css" rel="stylesheet">
    @livewireStyles

    <title>{{ $title ?? '' }}</title>

    <style>
        body {
            color: #fff;
        }

        .color-green {
            color: green;
        }

        .color-pink {
            color: pink;
        }

        .color-milo {
            color: #aa7f23;
        }

        .color-milo-light {
            color: #f0e5ce;
        }

        .color-milo-transparent {
            color: #aa7f23;
            opacity: 50%;
        }

        .color-black {
            color: black;
        }

        .color-brown {
            color: #6f555a;
        }

        .color-white {
            color: #fff;
        }

        .color-white:hover {
            color: #fff;
        }

        .bg-pink {
            background-color: pink;
            opacity:80%;
            color: #c54eed;
        }

        .bg-milo {
            background-color: #f0e5ce;
            color: #aa7f23;
        }

        .bg-green {
            background-color: green;
            opacity:80%;
            color: #fff;
        }

        .bg-black-transparent {
            background-color: black;
            opacity:50%;
            color: #fff;
        }

        .bg-grass-white-reverse {
            background-image: url("../img/grass-white-reverse.png");
            background-repeat: repeat;
            background-size: 100px;
        }

        .bg-qr-code {
            background-image: url("../img/bg-qr-code.png");
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100%;
        }
        
        .box-milo {
            border: 5px solid #f0e5ce;
            border-radius: 5%;
        }
    </style>
</head>
<body>
    @include("partials.navbar.navbar")

    @yield("content")

    @include("partials.footer.footer")

    <div x-data="{ scrollTop: true }">
        <button 
            id="scrollUp"
            :class="{ 'scrolled' : !scrollTop }"
            @scroll.window="scrollTop = (window.pageYOffset > 0) ? false : true"
            @click="window.scrollTo({ top: 0, behavior: 'smooth' })">
            <i class="fas fa-arrow-up"></i>
        </button>
    </div>

    @livewireScripts
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset("bootstrap/js/bootstrap.min.js") }}"></script>
    <script src="{{ asset("bootstrap/js/bootstrap.bundle.min.js") }}"></script>
    <script>
        AOS.init({
            once: true
        });
    </script>
</body>
</html>