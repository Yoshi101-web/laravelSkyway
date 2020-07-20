
<!doctype html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Web</title>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <div id="app">
        <web-speech></web-speech>
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>