
<!doctype html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Web</title>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>
<body>
    <div id="app">
    <i class="fas fa-microphone"></i>
        <i class="fas fa-microphone-slash"></i>
        <i class="fas fa-sign-out-alt"></i>
        <web-speech></web-speech>
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>