<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="/css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div class="wrap">
        <header>
            <div class="container">
                <div class="headerInner">
                    <h1 class="logo unselectable textShadow">Greater</h1>
                </div>
                <hr noshade="true">
            </div>
        </header>
        <main>
            <div class="container">
                <div class="mainInner">
@yield('content')
                </div>
            </div>
        </main>
        <footer>
            <div class="container">
                <hr noshade="">
                <div class="footerInner">
                    <h4>Greater</h4>
                </div>
            </div>
        </footer>
    </div>
@yield('javascript')
</body>
</html>