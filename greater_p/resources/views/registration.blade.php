<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="/css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
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
                    <h2 class="mainTitle">Registration</h2>
                    <div class="formWrap">
                        <form>
                            <label>Your Name
                                <input type="text">
                            </label>
                            <label>Your Email
                                <input type="email">
                            </label>
                            <label>Password
                                <input type="password">
                            </label>
                            <label>Password repeat
                                <input type="password">
                            </label>
                            <button class="btn regBtn">Registration</button>
                        </form>
                    </div>
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
</body>
</html>