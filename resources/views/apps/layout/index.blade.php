<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script defer src="{{ asset("js/alpine.min.js") }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet"/>
    <link href="{{ asset("bootstrap/css/bootstrap.min.css") }}" rel="stylesheet">
    <link href="{{ asset("css/apps.css") }}" rel="stylesheet">

    <style>
        .color-primer {
            background-image: linear-gradient(to bottom right, #c54eed, #3b084d);
            color: #c54eed;
        }

        .bg-pink {
            background-image: linear-gradient(to bottom right, #ffc6d0, #ffc6d0);
            color: #c54eed;
        }

        .border-bottom-pink {
            border-bottom:3px solid pink;
        }
    </style>
    @livewireStyles

    <title>Apps Control</title>
</head>
<body>
    
    @yield('content')

    @include('apps.partials.logout-modal')
    @include('apps.partials.delete-modal')
    
    @livewireScripts
    <script src="{{ asset("js/clipboard.min.js") }}"></script>
    <script src="{{ asset("js/html5-qrcode.min.js") }}"></script>
    <script src="{{ asset("bootstrap/js/bootstrap.bundle.min.js") }}"></script>
    <script>
        new ClipboardJS('.btn');
    </script>
    <script>
        function onScanSuccess(decodedText, decodedResult) {
            Livewire.emit('getUniqID', decodedText)
            Livewire.emit('attend', decodedText)
            setTimeout(function(){
                Livewire.emit('closePopup')
            }, 5000)
        }

        var html5QrcodeScanner = new Html5QrcodeScanner(
            "reader", { fps: 10, qrbox: 300 });
        html5QrcodeScanner.render(onScanSuccess);
    </script>
</body>
</html>