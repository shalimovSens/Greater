@extends('layouts.base')
@section('content')
                    <h2 class="mainTitle"><span>{{ $username }}</span> are Greater than yesterday</h2>
                    @auth
                    <div class="timerWrap">
                        <div class="circle">
                            <svg>
                                <circle cx="50%" cy="50%" r="48.8%"></circle>
                                <circle cx="50%" cy="50%" r="46.5%" class="progressCircle"></circle>
                            </svg>
                            <!-- <div class='time'><span class="hours textShadow">00</span>:<span class="minutes textShadow">00</span>:<span class="seconds textShadow">00</span></div> -->
                            <div class="time">00:00:00</div>
                        </div>
                        <div class="navStopwatch">
                            <button class="startCount btn">Start</button>
                            <button class="stopCount btn">Stop</button>
                            <button class="saveCount btn">Save</button>
                        </div>
                    </div>
                    @endauth
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
                                    <p class="cardDesc">We'll help you track your progress.</p>
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
                    @auth
                    <section>
                        <h2 class='mainTitle'>You progress to greatness</h2>
                        <table class='resultTable'>
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Counted</th>
                                </tr>
                            </thead>
                            <tbody class='tableBody'>

                            </tbody>
                        </table>
                    </section>
                    @endauth
                    <div class="wrapOfAccBtn">
                    @auth
                        <a href="{{ route('logout') }}"><button class="btn logBtn">Logout</button></a>
                    @endauth
                    @guest
                        <a href="{{ route('reg') }}"><button class="btn regBtn">Registration</button></a>
                        <a href="{{ route('log') }}"><button class="btn authBtn">Login</button></a>
                    @endguest
                    </div>
                    
@endsection
@section('javascript')
    <script src="/js/script.js"></script>
    <script src="/js/service.js"></script>
    @auth
        <script src="/js/logs.js"></script>
        <script src="/js/newTimer.js"></script>
        <!-- <script src="/js/stopwatch.js"></script> -->
    @endauth
@endsection