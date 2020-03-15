<!DOCTYPE html>
<html lang="en">

<head>
    <script src="{{ asset('animations/scripts/_minified.js') }}"></script>
    <script src="{{ asset('animations/scripts/_global.js') }}"></script>
    <script src="{{ asset('animations/scripts/ban.js') }}"></script>

    <link rel="stylesheet" type="text/css" href="{{ asset('animations/scripts/_global.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('animations/scripts/ban.css') }}">
</head>

<body>
    <div class="full top">
        <div class="title">
            <div class="bglogo">
                <img src="{{ asset('animations/logos/UBUeSport.svg') }}" alt="logo" class="logos" id="logo">
            </div>
            <div class="BlueTBG">
                <div class="Team1" id="t1">@Team A</div>
                <div class="score1" id="s1">0</div>
            </div>
            <div class="RedTBG">
                <div class="Team2" id="t2">@Team B</div>
                <div class="score2" id="s2">00</div>
            </div>
        </div>
    </div>
</body>

</html>
