<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
       .custom-background {
            background-image: url('{{ asset('images/bg_1.png') }}');
            background-size: 100% 100%;
            background-repeat: no-repeat;
            background-attachment: fixed; /* Optional: Fixed background */
        }
        .form {
            margin-top: 75%;
            border-radius: 0%;
        }
        .sharp-input {
            border-radius: 0%;
            border: 0px;
            border-bottom: 1px solid #ffff;
            font-family: figtree, sans-serif;
            font-size: 25px;
            color: #000;
            text-align: center;
            width: 80%;
            height: 100%;
            border-radius: 10px; /* Sesuaikan nilai sesuai dengan seberapa bulat yang Anda inginkan */
                }
        </style>
    </head>
    <body class="custom-background">
    <center>
    </center>

    </body>
</html>
