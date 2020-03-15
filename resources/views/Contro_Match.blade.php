@extends('layouts.nav')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/Controller.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/gridstack@1.1.0/dist/gridstack.min.css" />
<script src="https://cdn.jsdelivr.net/npm/gridstack@1.1.0/dist/gridstack.all.js"></script>


@endsection

@section('content')
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
        <div class="grid-stack-item" data-gs-width="6" data-gs-height="3" data-gs-no-resize="true">
            <div class="grid-stack-item-content">
                <form action="{{ url('Controller') }}" method="POST">
                    @csrf
                    <div class="jumbotron">
                        <div class="row">
                            <div class="input-group col-6 md-auto">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="TeamAs">Team:A</label>
                                </div>
                                <input list="TeamA" name="TeamA" id="TeamAs" class="custom-select"></label>
                                <datalist id="TeamA">
                                    <option value="Team">
                                    <option value="Team">
                                    <option value="Team">
                                    <option value="Team">
                                    <option value="Team">
                                </datalist>
                            </div>

                            <div class="input-group col-6 md-auto">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="TeamBs">Team:B</label>
                                </div>
                                <input list="TeamB" name="TeamB" id="TeamBs" class="custom-select"></label>
                                <datalist id="TeamB">
                                    <option value="Team">
                                    <option value="Team">
                                    <option value="Team">
                                    <option value="Team">
                                    <option value="Team">
                                </datalist>
                            </div>
                            <div class="col-6 md-auto">
                                <input type="number" name="scoret1" min="0" value="0" class="number form-control">
                            </div>
                            <div class="col-6 md-auto">
                                <input type="number" name="scoret2" min="0" value="0" class="number form-control">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success" id="pass">อัพเดท</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="grid-stack-item" data-gs-width="6" data-gs-height="5" data-gs-no-resize="true">
            <div class="grid-stack-item-content">
                <div class="jumbotron">
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
                        <br><br>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script type="text/javascript">
    var grid = GridStack.init();
</script>

@endsection
