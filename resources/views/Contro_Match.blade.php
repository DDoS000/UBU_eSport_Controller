@extends('layouts.nav')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/Controller.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/gridstack@1.1.0/dist/gridstack.min.css" />
<script src="https://cdn.jsdelivr.net/npm/gridstack@1.1.0/dist/gridstack.all.js"></script>
<link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">


@endsection

@section('content')
<br>
<div class="container-xl">
    @if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul> @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach </ul>
    </div>
    @endif

    @if(\Session::has('success'))
    <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
    </div>
    @endif

    <div class="grid-stack">
        <div class="grid-stack-item" data-gs-width="6" data-gs-height="4" data-gs-no-resize="true">
            <div class="grid-stack-item-content">
                @if ($Teams->TeamA == '')
                <form action="{{ url('Controller') }}" method="POST">
                    @csrf
                    <input type="hidden" name="tid" value="{{ $tid }}">
                    <div class="jumbotron">
                        <h4>จัดการทีมแข่ง</h4>
                        <hr>
                        <div class="row">
                            <div class="input-group col-6 md-auto">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="TeamAs">Team:A</label>
                                </div>
                                <input list="TeamA" name="TeamA" value="{{ $Teams->TeamA }}" id="TeamAs"
                                    class="custom-select" required></label>
                                <datalist id="TeamA">
                                    @foreach($Team_names as $Team_name)
                                    <option value="{{$Team_name}}">
                                        @endforeach
                                </datalist>
                            </div>

                            <div class="input-group col-6 md-auto">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="TeamBs">Team:B</label>
                                </div>
                                <input list="TeamB" name="TeamB" id="TeamBs" value="{{ $Teams->TeamB }}"
                                    class="custom-select" required></label>
                                <datalist id="TeamB">
                                    @foreach($Team_names as $Team_name)
                                    <option value="{{$Team_name}}">
                                        @endforeach
                                </datalist>
                            </div>
                            <div class="col-6 md-auto">
                                <input type="number" name="scoret1" min="0" value="{{ $Teams->scoret1 }}"
                                    class="number form-control" required>
                            </div>
                            <div class="col-6 md-auto">
                                <input type="number" name="scoret2" min="0" value="{{ $Teams->scoret2 }}"
                                    class="number form-control" required>
                            </div>
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-outline-primary" id="pass" style="float:right;margin-top:6px">อัพเดท</button>
                    </div>
                </form>
                @else
                <form action="{{ action('CTL_Contro_Matchs@update', $tid) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="tid" value="{{ $tid }}">
                    <div class="jumbotron">
                        <h4>จัดการทีมแข่ง</h4>
                        <hr>
                        <div class="row">
                            <div class="input-group col-6 md-auto">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="TeamAs">Team:A</label>
                                </div>
                                <input list="TeamA" name="TeamA" value="{{ $Teams->TeamA }}" id="TeamAs"
                                    class="custom-select" required></label>
                                <datalist id="TeamA">
                                    @foreach($Team_names as $Team_name)
                                    <option value="{{$Team_name}}">
                                        @endforeach
                                </datalist>
                            </div>

                            <div class="input-group col-6 md-auto">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="TeamBs">Team:B</label>
                                </div>
                                <input list="TeamB" name="TeamB" id="TeamBs" value="{{ $Teams->TeamB }}"
                                    class="custom-select" required></label>
                                <datalist id="TeamB">
                                    @foreach($Team_names as $Team_name)
                                    <option value="{{$Team_name}}">
                                        @endforeach
                                </datalist>
                            </div>
                            <div class="col-6 md-auto">
                                <input type="number" name="scoret1" min="0" value="{{ $Teams->scoret1 }}"
                                    class="number form-control" required>
                            </div>
                            <div class="col-6 md-auto">
                                <input type="number" name="scoret2" min="0" value="{{ $Teams->scoret2 }}"
                                    class="number form-control" required>
                            </div>
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-outline-primary" id="pass" style="float:right;margin-top:6px">อัพเดท</button>
                    </div>
                </form>
                @endif
            </div>
        </div>


        <div class="grid-stack-item" data-gs-width="6" data-gs-height="4" data-gs-no-resize="true">
            <div class="grid-stack-item-content">
                <div class="jumbotron">
                    <h4>API Key</h4>
                    <hr>
                    <label>Scenes: inGame</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" value="http://127.0.0.1:8000/Controller/inGame/{{$tid}}"
                            aria-label="Recipient's username" aria-describedby="inGame" id="inGames" readonly>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="inGame"
                                onclick="inGame()">คัดลอก</button>
                        </div>
                    </div>
                    <label>Scenes: Ban Pick</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" value="http://127.0.0.1:8000/Controller/Ban/{{$tid}}"
                            aria-label="Recipient's username" aria-describedby="Ban" id="Bans" readonly>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="Ban"
                                onclick="Ban()">คัดลอก</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="grid-stack-item" data-gs-width="6" data-gs-height="5" data-gs-no-resize="true">
            <div class="grid-stack-item-content">
                <div class="jumbotron">
                    <h4>จัดการพลังแฝง</h4>
                    <hr>
                    <div class="row">
                        <label class="col-6 md-auto">Team:A</label>
                        <label class="col-6 md-auto">Team:B</label>
                        <div class="input-group col-6 md-auto">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="Player1">Player1</label>
                            </div>
                            <select id="Player1" name="Player1" class="custom-select">
                                <option value="Curse-of-Death.png">Curse-of-Death</option>
                                <option value="Desperate-Duel.png">Desperate-Duel</option>
                                <option value="Devils-Awakening.png">Devils-Awakening</option>
                                <option value="Endless-Cycle.png">Endless-Cycle</option>
                                <option value="Visceral-Boost.png">Visceral-Boost</option>
                                <option value="Explosive-Shield.png">Explosive-Shield</option>
                                <option value="Forest-Wanderer.png">Forest-Wanderer</option>
                                <option value="Natures-Rage.png">Natures-Rage</option>
                                <option value="Holy-Summoner.png">Holy-Summoner</option>
                                <option value="Holy-Thunder.png">Holy-Thunder</option>
                                <option value="Sacred-Protection.png">Sacred-Protection</option>
                            </select>
                        </div>
                        <div class="input-group col-6 md-auto">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="Player6">Player6</label>
                            </div>
                            <select id="Player6" name="Player6" class="custom-select">
                                <option value="Curse-of-Death.png">Curse-of-Death</option>
                                <option value="Desperate-Duel.png">Desperate-Duel</option>
                                <option value="Devils-Awakening.png">Devils-Awakening</option>
                                <option value="Endless-Cycle.png">Endless-Cycle</option>
                                <option value="Visceral-Boost.png">Visceral-Boost</option>
                                <option value="Explosive-Shield.png">Explosive-Shield</option>
                                <option value="Forest-Wanderer.png">Forest-Wanderer</option>
                                <option value="Natures-Rage.png">Natures-Rage</option>
                                <option value="Holy-Summoner.png">Holy-Summoner</option>
                                <option value="Holy-Thunder.png">Holy-Thunder</option>
                                <option value="Sacred-Protection.png">Sacred-Protection</option>
                            </select>
                        </div>
                        <div class="input-group col-6 md-auto">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="Player2">Player2</label>
                            </div>
                            <select id="Player2" name="Player2" class="custom-select">
                                <option value="Curse-of-Death.png">Curse-of-Death</option>
                                <option value="Desperate-Duel.png">Desperate-Duel</option>
                                <option value="Devils-Awakening.png">Devils-Awakening</option>
                                <option value="Endless-Cycle.png">Endless-Cycle</option>
                                <option value="Visceral-Boost.png">Visceral-Boost</option>
                                <option value="Explosive-Shield.png">Explosive-Shield</option>
                                <option value="Forest-Wanderer.png">Forest-Wanderer</option>
                                <option value="Natures-Rage.png">Natures-Rage</option>
                                <option value="Holy-Summoner.png">Holy-Summoner</option>
                                <option value="Holy-Thunder.png">Holy-Thunder</option>
                                <option value="Sacred-Protection.png">Sacred-Protection</option>
                            </select>
                        </div>
                        <div class="input-group col-6 md-auto">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="Player7">Player7</label>
                            </div>
                            <select id="Player7" name="Player7" class="custom-select">
                                <option value="Curse-of-Death.png">Curse-of-Death</option>
                                <option value="Desperate-Duel.png">Desperate-Duel</option>
                                <option value="Devils-Awakening.png">Devils-Awakening</option>
                                <option value="Endless-Cycle.png">Endless-Cycle</option>
                                <option value="Visceral-Boost.png">Visceral-Boost</option>
                                <option value="Explosive-Shield.png">Explosive-Shield</option>
                                <option value="Forest-Wanderer.png">Forest-Wanderer</option>
                                <option value="Natures-Rage.png">Natures-Rage</option>
                                <option value="Holy-Summoner.png">Holy-Summoner</option>
                                <option value="Holy-Thunder.png">Holy-Thunder</option>
                                <option value="Sacred-Protection.png">Sacred-Protection</option>
                            </select>
                        </div>
                        <div class="input-group col-6 md-auto">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="Player3">Player3</label>
                            </div>
                            <select id="Player3" name="Player3" class="custom-select">
                                <option value="Curse-of-Death.png">Curse-of-Death</option>
                                <option value="Desperate-Duel.png">Desperate-Duel</option>
                                <option value="Devils-Awakening.png">Devils-Awakening</option>
                                <option value="Endless-Cycle.png">Endless-Cycle</option>
                                <option value="Visceral-Boost.png">Visceral-Boost</option>
                                <option value="Explosive-Shield.png">Explosive-Shield</option>
                                <option value="Forest-Wanderer.png">Forest-Wanderer</option>
                                <option value="Natures-Rage.png">Natures-Rage</option>
                                <option value="Holy-Summoner.png">Holy-Summoner</option>
                                <option value="Holy-Thunder.png">Holy-Thunder</option>
                                <option value="Sacred-Protection.png">Sacred-Protection</option>
                            </select>
                        </div>
                        <div class="input-group col-6 md-auto">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="Player8">Player8</label>
                            </div>
                            <select id="Player8" name="Player8" class="custom-select">
                                <option value="Curse-of-Death.png">Curse-of-Death</option>
                                <option value="Desperate-Duel.png">Desperate-Duel</option>
                                <option value="Devils-Awakening.png">Devils-Awakening</option>
                                <option value="Endless-Cycle.png">Endless-Cycle</option>
                                <option value="Visceral-Boost.png">Visceral-Boost</option>
                                <option value="Explosive-Shield.png">Explosive-Shield</option>
                                <option value="Forest-Wanderer.png">Forest-Wanderer</option>
                                <option value="Natures-Rage.png">Natures-Rage</option>
                                <option value="Holy-Summoner.png">Holy-Summoner</option>
                                <option value="Holy-Thunder.png">Holy-Thunder</option>
                                <option value="Sacred-Protection.png">Sacred-Protection</option>
                            </select>
                        </div>
                        <div class="input-group col-6 md-auto">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="Player4">Player4</label>
                            </div>
                            <select id="Player4" name="Player4" class="custom-select">
                                <option value="Curse-of-Death.png">Curse-of-Death</option>
                                <option value="Desperate-Duel.png">Desperate-Duel</option>
                                <option value="Devils-Awakening.png">Devils-Awakening</option>
                                <option value="Endless-Cycle.png">Endless-Cycle</option>
                                <option value="Visceral-Boost.png">Visceral-Boost</option>
                                <option value="Explosive-Shield.png">Explosive-Shield</option>
                                <option value="Forest-Wanderer.png">Forest-Wanderer</option>
                                <option value="Natures-Rage.png">Natures-Rage</option>
                                <option value="Holy-Summoner.png">Holy-Summoner</option>
                                <option value="Holy-Thunder.png">Holy-Thunder</option>
                                <option value="Sacred-Protection.png">Sacred-Protection</option>
                            </select>
                        </div>
                        <div class="input-group col-6 md-auto">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="Player9">Player9</label>
                            </div>
                            <select id="Player9" name="Player9" class="custom-select">
                                <option value="Curse-of-Death.png">Curse-of-Death</option>
                                <option value="Desperate-Duel.png">Desperate-Duel</option>
                                <option value="Devils-Awakening.png">Devils-Awakening</option>
                                <option value="Endless-Cycle.png">Endless-Cycle</option>
                                <option value="Visceral-Boost.png">Visceral-Boost</option>
                                <option value="Explosive-Shield.png">Explosive-Shield</option>
                                <option value="Forest-Wanderer.png">Forest-Wanderer</option>
                                <option value="Natures-Rage.png">Natures-Rage</option>
                                <option value="Holy-Summoner.png">Holy-Summoner</option>
                                <option value="Holy-Thunder.png">Holy-Thunder</option>
                                <option value="Sacred-Protection.png">Sacred-Protection</option>
                            </select>
                        </div>
                        <div class="input-group col-6 md-auto">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="Player5">Player5</label>
                            </div>
                            <select id="Player5" name="Player5" class="custom-select">
                                <option value="Curse-of-Death.png">Curse-of-Death</option>
                                <option value="Desperate-Duel.png">Desperate-Duel</option>
                                <option value="Devils-Awakening.png">Devils-Awakening</option>
                                <option value="Endless-Cycle.png">Endless-Cycle</option>
                                <option value="Visceral-Boost.png">Visceral-Boost</option>
                                <option value="Explosive-Shield.png">Explosive-Shield</option>
                                <option value="Forest-Wanderer.png">Forest-Wanderer</option>
                                <option value="Natures-Rage.png">Natures-Rage</option>
                                <option value="Holy-Summoner.png">Holy-Summoner</option>
                                <option value="Holy-Thunder.png">Holy-Thunder</option>
                                <option value="Sacred-Protection.png">Sacred-Protection</option>
                            </select>
                        </div>
                        <div class="input-group col-6 md-auto">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="Player10">Player10</label>
                            </div>
                            <select id="Player10" name="Player10" class="custom-select">
                                <option value="Curse-of-Death.png">Curse-of-Death</option>
                                <option value="Desperate-Duel.png">Desperate-Duel</option>
                                <option value="Devils-Awakening.png">Devils-Awakening</option>
                                <option value="Endless-Cycle.png">Endless-Cycle</option>
                                <option value="Visceral-Boost.png">Visceral-Boost</option>
                                <option value="Explosive-Shield.png">Explosive-Shield</option>
                                <option value="Forest-Wanderer.png">Forest-Wanderer</option>
                                <option value="Natures-Rage.png">Natures-Rage</option>
                                <option value="Holy-Summoner.png">Holy-Summoner</option>
                                <option value="Holy-Thunder.png">Holy-Thunder</option>
                                <option value="Sacred-Protection.png">Sacred-Protection</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid-stack-item" data-gs-width="6" data-gs-height="3" data-gs-no-resize="true">
            <div class="grid-stack-item-content">
                <div class="jumbotron">
                    <h4>จัดการ</h4>
                    <hr>
                    <div class="row">

                        <div class="input-group col-3 md-auto">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="upSpeed">upSpeed</span>
                            </div>
                            <input type="number" name="upSpeed" min="5000" value="5000" class="number form-control"
                                aria-label="Default" aria-describedby="upSpeed" required>
                        </div>
                        <div class="input-group col-3 md-auto">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inSpeed">inSpeed</span>
                            </div>
                            <input type="number" name="inSpeed" min="1000" value="1000" class="number form-control"
                                aria-label="Default" aria-describedby="inSpeed" required>
                        </div>
                        <div class="input-group col-3 md-auto">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="outSpeed">upSpeed</span>
                            </div>
                            <input type="number" name="outSpeed" min="1000" value="1000" class="number form-control"
                                aria-label="Default" aria-describedby="outSpeed" required>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
</div>

<script type="text/javascript">
    var grid = GridStack.init();
</script>

<script>
    function inGame() {
      var copyText = document.getElementById("inGames");
      copyText.select();
      copyText.setSelectionRange(0, 99999)
      document.execCommand("copy");
      alert("คัดลอกสําเร็จ: " + copyText.value);
    }
    function Ban() {
      var copyText = document.getElementById("Bans");
      copyText.select();
      copyText.setSelectionRange(0, 99999)
      document.execCommand("copy");
      alert("คัดลอกสําเร็จ: " + copyText.value);
    }
</script>


@endsection
