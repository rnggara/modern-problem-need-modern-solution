<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
@yield('title')
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;600&display=swap" rel="stylesheet">
        {{-- <script src="{{ asset ('/assets/ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js') }}"></script> --}}
        <script src="{{ asset ('/assets/cdn.sstatic.net/Js/stub.en448c.js?v=39ab3f513667') }}"></script>
        <script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ asset ('/assets/cdn.sstatic.net/Shared/stacksbb51.css?v=0ee8a05683e7') }}" >
        <link rel="stylesheet" type="text/css" href="{{ asset ('/assets/cdn.sstatic.net/Sites/stackoverflow/primarya0e2.css?v=c5fdf309f06b') }}" >
        {{-- <link rel="icon" href="{{ asset ('/assets/favicon.gif') }}" type="image/gif" sizes="16x16"> --}}
        @yield('styles')
</head>

<body class="questions-page unified-theme">
    <header class="top-bar js-top-bar navbar top-bar__network _fixed " style= "background-color: #4682b4;border-top: 0; box-shadow: 0px 1px 5px 2px rgba(0,0,0,0.4)">
        <div class="wmx12 mx-auto grid ai-center h100" role="menubar">
            <!-- This form is for the search bar at the top of the page -->
            <ol class="overflow-x-auto ml-auto -secondary grid ai-center list-reset h100 user-logged-out" role="presentation">
            {{-- <li class="-item searchbar-trigger"><a href="#" class="-link js-searchbar-trigger" role="button" aria-label="Search" aria-haspopup="true" aria-controls="search" title="Click to show search"><svg aria-hidden="true" class="svg-icon iconSearch" width="18" height="18" viewBox="0 0 18 18"><path d="M18 16.5l-5.14-5.18h-.35a7 7 0 10-1.19 1.19v.35L16.5 18l1.5-1.5zM12 7A5 5 0 112 7a5 5 0 0110 0z"/></svg></a></li> --}}
            <li class="-ctas">
                @guest
                    <a href="{{ route('login') }}" class="login-link s-btn s-btn__primary py8 js-gps-track" style="font-family:'Nunito', sans-serif; font-weight: 600; color: black; background-color: #e7e7e7; border-radius: 25px; padding: 20px;}"rel="nofollow">Masuk</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="login-link s-btn s-btn__primary py8" style="font-family:'Nunito', sans-serif; font-weight: 600; background-color: black; border-radius: 25px; padding: 20px;" rel="nofollow" data-ga="[&quot;sign up&quot;,&quot;Sign Up Navigation&quot;,&quot;Header&quot;,null,null]">Daftar Sekarang</a>
                    @endif
                @else
                    <a class="login-link s-btn s-btn__primary py8" style="font-family:'Nunito', sans-serif; font-weight: 600; color: black; background-color: #e7e7e7; border-radius: 25px; padding: 20px;}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endguest
            </li>
        </ol>
        </div>
    </header>

    
    <div class="container">
        @include('templateforum.partials.leftsidebar')
        @yield('content')
        @include('templateforum.partials.rightsidebar')
    </div>

    <!-- Footer Section !-->
    <footer id="footer" class="site-footer js-footer" role="contentinfo">
        <div class="site-footer--container">
            <p class="mt-auto mb24" style = "font-family: 'Nunito', sans-serif; color: white;">
            &#169; 2020 Tanya Kami
            </p>
        </div>
    </footer>

{{--commentout--}}   
    {{-- <script>StackExchange.ready(function () { StackExchange.responsiveness.addSwitcher(); })</script>
    <noscript>
        <div id="noscript-warning">Stack Overflow works best with JavaScript enabled
            <img src=" {{ asset ('/assets/pixel.quantserve.com/pixel/p-c1rF4kxgLUzNc.gif') }}" alt="" class="dno">
        </div>
    </noscript> --}}
{{-- /commentout --}}

@stack('scripts')

{{-- commentout --}}
    {{-- <script>
    (function(i, s, o, g, r, a, m) {
                    i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function() { (i[r].q = i[r].q || []).push(arguments) }, i[r].l = 1 * new Date(); a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m);
                })(window, document, 'script', ' {{ asset ('/assets/www.google-analytics.com/analytics.js') }} ', 'ga');
    
                StackExchange.ready(function () {
    
                    StackExchange.ga.init({
                        sendTitles: true,
                        tracker: window.ga,
                        trackingCodes: [
                            'UA-108242619-1'
                        ],
                            checkDimension: 'dimension42'
                    });
                        StackExchange.ga.setDimension('dimension3', 'Questions/List');
                    StackExchange.ga.trackPageView();
                });
                /**/
                var _qevents = _qevents || [],
                _comscore = _comscore || [];
                (function() {
                    var ssl = 'https:' == document.location.protocol,
                        s = document.getElementsByTagName('script')[0],
                        qc = document.createElement('script');
     qc.async = true;
                        qc.src = (ssl ? 'https://secure' : 'http://edge') + '.quantserve.com/quant.js';
                        s.parentNode.insertBefore(qc, s);
                        _qevents.push({ qacct: "p-c1rF4kxgLUzNc" });/**/
     var sc = document.createElement('script');
                        sc.async = true;
                        sc.src = (ssl ? 'https://sb' : 'http://b') + '.scorecardresearch.com/beacon.js';
                        s.parentNode.insertBefore(sc, s);
                        _comscore.push({ c1: "2", c2: "17440561" });            })();
    </script> --}}
{{-- commentout --}}
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
    </html>
