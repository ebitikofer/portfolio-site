<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Eric Bitikofer</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.5.3/css/foundation.css" rel="stylesheet">

        <!-- Styles -->
        <style>

            @keyframes slideInFromTop {
                0% {
                    transform: translateY(-100%);
                }
                100% {
                    transform: translateY(0);
                }
            }

            html, body {
                background-color: #344046;
                color: #fff;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .quarter-height {
                height: 30vh;
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

            .links > a {
                color: #fff;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            a {
                color: #fff;
            }

            .links > #current {
                color: #999;
                cursor: default;
            }

            .m-b-md-ind {
                margin-bottom: 100px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            #l1 {
                animation: 1s ease-out 10s 1 slideInFromTop;
            }

        </style>

    </head>
    <body>

        <div class="row">

            @include('inc.messages')
            @yield('content')

        </div>

    </body>
</html>
