<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
    <script>
        var fileUrl = "http://127.0.0.1:8000/Controller/api/{{$tid}}";
    </script>
    <script src="{{ asset('animations/scripts/_minified.js') }}"></script>
    <script src="{{ asset('animations/scripts/_global.js') }}"></script>
    <script src="{{ asset('animations/scripts/inGame.js') }}"></script>

    <link rel="stylesheet" type="text/css" href="{{ asset('animations/scripts/_global.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('animations/scripts/inGame.css') }}">
</head>

<body>

    <div class="ads">
        <div class="Adslogo"></div>
    </div>

    <div class="full top">
        <div class="full">
            <div class="full">
                <div class="BGlogoT1 BGlogos">
                    <img src="{{ asset('animations/images/logoTa.svg') }}" class="logos logo1" id="logo1">
                </div>
                <div class="BGlogoT2 BGlogos">
                    <img src="{{ asset('animations/images/logoTb.svg') }}" class="logos logo2" id="logo2">
                </div>
            </div>

            <div class="mp">
                <div class="matches overflow">
                    <div class="matche overflow" id="mm">@Match</div>
                    <div class="matche1 overflow" id="gg">@MatchRound</div>
                </div>
                <div class="BGname overflow">
                    <div class="teams Tname1" id="t1">@Team A</div>
                    <div class="teams Tname2" id="t2">@Team B</div>
                    <div class="score score1" id="s1">@0</div>
                    <div class="score score2" id="s2">@0</div>
                </div>
            </div>
        </div>
    </div>

    <div class="ECMBGBLUES">
        <div class="ECMBLUEBG EP1">
            <img src="{{ asset('animations/ENCs/Curse-of-Death.png') }}" class="EBS" id="E1">
        </div>
        <div class="ECMBLUEBG EP2">
            <img src="{{ asset('animations/ENCs/Desperate-Duel.png') }}" class="EBS" id="E2">
        </div>
        <div class="ECMBLUEBG EP3">
            <img src="{{ asset('animations/ENCs/Devils-Awakening.png') }}" class="EBS" id="E3">
        </div>
        <div class="ECMBLUEBG EP4">
            <img src="{{ asset('animations/ENCs/Endless-Cycle.png') }}" class="EBS" id="E4">
        </div>
        <div class="ECMBLUEBG EP5">
            <img src="{{ asset('animations/ENCs/Explosive-Shield.png') }}" class="EBS" id="E5">
        </div>
    </div>

    <div class="ECMBGREDS">
        <div class="ECMREDBG EP6">
            <img src="{{ asset('animations/ENCs/Forest-Wanderer.png') }}" class="ERS" id="E6">
        </div>
        <div class="ECMREDBG EP7">
            <img src="{{ asset('animations/ENCs/Holy-Summoner.png') }}" class="ERS" id="E7">
        </div>
        <div class="ECMREDBG EP8">
            <img src="{{ asset('animations/ENCs/Holy-Thunder.png') }}" class="ERS" id="E8">
        </div>
        <div class="ECMREDBG EP9">
            <img src="{{ asset('animations/ENCs/Natures-Rage.png') }}" class="ERS" id="E9">
        </div>
        <div class="ECMREDBG EP10">
            <img src="{{ asset('animations/ENCs/Sacred-Protection.png') }}" class="ERS" id="E10">
        </div>
    </div>

</body>

</html>
