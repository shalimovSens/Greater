<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="/css/index.css">
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@1,400;1,700&display=swap" rel="stylesheet"> --}}
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
                    <h2 class="mainTitle"><span>You</span> are Greater than yesterday</h2>
                    <article class="cardSectionGrid">
                        <div class="col-1">
                            <div class="cardInner">
                                <h6 class="verticalText cardTitle textShadow">Witness your greatness.</h6>
                                <p class="verticalText cardTitle textShadow">We help you</p>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="card">
                                <div class="cardInner">
                                    <h6 class="cardTitle textShadow">Work when inspiration strikes</h6>
                                    <p class="cardDesc">Be ready to revise any system, scrap any method, abandon any theory, if the success of the job requires it.</p>
                                    {{-- <p class="cardDesc">We are here for experience, and experience is a preparation to know the Truth when we meet it.</p> --}}
                                    <p class="cardDesc">We'll help you track your progress</p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="cardInner">
                                    <h6 class="cardTitle textShadow">Rejoice in your success</h6>
                                    <p class="cardDesc">The future belongs to those who believe in the beauty of their dreams.</p>
                                    {{-- <p class="cardDesc">Develop success from failures. Discouragement and failure are two of the surest stepping stones to success.</p> --}}
                                    <p class="cardDesc">We will help you gain faith.</p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="cardInner">
                                    <h6 class="cardTitle textShadow">Focus on creating</h6>
                                    {{-- <p class="cardDesc">Sometimes life is going to hit you in the head with a brick. Don't lose faith.</p> --}}
                                    <p class="cardDesc">We are here for experience, and experience is a preparation to know the Truth when we meet it.</p>
                                    {{-- <p class="cardDesc">The short successes that can be gained in a brief time and without difficulty, are not worth much.</p> --}}
                                    <p class="cardDesc">We will help you continue.</p>
                                </div>
                            </div>
                        </div>
                    </article>
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
        <script src="/js/script.js"></script>
</body>
</html>