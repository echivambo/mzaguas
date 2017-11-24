
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MZAguas</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: Raleway,sans-serif;
            font-size: 14px;
            line-height: 1.6;
            color: #636b6f;
            background-color: cadetblue;
        }
        .topo{
            padding-top: 70px;
        }
        #titolo{
            font-size: 2em;
            color: cadetblue;
            font-family: cursive;
        }

    </style>
</head>
<body>

<div id="content" class="topo">

      @yield('content')

</div>
</body>
</html>
