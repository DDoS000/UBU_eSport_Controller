@extends('layouts.app')

@section('src')
<link rel="stylesheet" href="{{ asset('css/homePage.css')}}">
<link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
<script src="https://kit.fontawesome.com/a02c0e0dce.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css">
@endsection
@section('title','UBUeSport Console')



@section('content')
<div class="skew">
    <div class="text-head">
        <i id="joy" class="fas fa-gamepad"></i> ทัวร์นาเมนต์ของคุณ
    </div>
<img class="img-over" src="{{asset('images/undraw_gaming_6oy3.svg')}}" alt="">
</div>
<div id="content-card">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-sm-auto">
                <button type="button" id="demo01" href="#animatedModal"
                    class="btn-addMatch gradient shadow p-3 mb-5 bg-white">
                    <i class="fas fa-plus"></i>
                    <label id="Tour-text" for="">สร้างทัวร์นาเมนต์</label>
                </button>
            </div>

            @foreach($game as $row)
            <div class="col-sm-auto">
                <a href="/Controller/{{ $row->tid }}">
                    <button type="button" class="btn-addMatch gradient shadow p-3 mb-5 bg-white">

                        <label id="Tour-name" for="">{{ $row->Tournament_Name }}</label>
                        <label id="Tour-Date" for="">{{ $row->created_at }}</label>

                    </button>
                </a>
            </div>
            @endforeach

        </div>
    </div>
</div>










<!--DEMO01-->
<div id="animatedModal">
    <!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID  class="close-animatedModal" -->
    <div class="close-animatedModal">
        <img id="close" src="{{asset('images/close.svg')}}" alt="close" srcset="">
    </div>

    <div class="modal-content">
        <!--Your modal content goes here-->
        <div class="container">
            <form action="/home" method="post">
                @csrf
                <div class="row" style="text-align:center;">
                    <div class="col-sm">
                        <section>
                            <span class="input input--hoshi">
                                <input class="input__field input__field--hoshi" type="text" id="input-4"
                                    name="Team_name" required />
                                <label class="input__label input__label--hoshi input__label--hoshi-color-1"
                                    for="input-4">
                                    <span class="input__label-content input__label-content--hoshi">ชื่อทีมที่แข่งขัน (
                                        ชื่อทีมแต่ละทีมต้องคั่นด้วย , )</span>
                                </label>
                            </span>
                        </section>
                    </div>
                </div>
                <div class="row" style="text-align:center;">
                    <div class="col-sm">
                        <section>
                            <span class="input input--hoshi">
                                <input class="input__field input__field--hoshi" type="text" id="input-4"
                                    name="Tournament_Name" required />
                                <label class="input__label input__label--hoshi input__label--hoshi-color-1"
                                    for="input-4">
                                    <span
                                        class="input__label-content input__label-content--hoshi">ชื่อทัวร์นาเมนต์</span>
                                </label>
                            </span>
                        </section>
                    </div>
                    <div class="col-sm">
                        <section>
                            <span class="input input--hoshi">
                                <input class="input__field input__field--hoshi" type="text" id="input-4"
                                    name="Tournament_Details" required />
                                <label class="input__label input__label--hoshi input__label--hoshi-color-1"
                                    for="input-4">
                                    <span class="input__label-content input__label-content--hoshi">รายละเอียด</span>
                                </label>
                            </span>
                        </section>
                    </div>
                </div>
                <div class="row" style="text-align:center;">
                    <div class="col-sm">
                        <section>
                            <span class="input input--hoshi">
                                <input class="input__field input__field--hoshi" type="text" id="input-4"
                                    name="Game_name" required />
                                <label class="input__label input__label--hoshi input__label--hoshi-color-1"
                                    for="input-4">
                                    <span class="input__label-content input__label-content--hoshi">ชื่อเกม</span>
                                </label>
                            </span>
                        </section>
                    </div>
                    <div class="col-sm">
                        <section>
                            <span class="input input--hoshi">
                                <input class="input__field input__field--hoshi" type="text" id="input-4"
                                    name=" Game_rules" required />
                                <label class="input__label input__label--hoshi input__label--hoshi-color-1"
                                    for="input-4">
                                    <span class="input__label-content input__label-content--hoshi">กติกาของเกม</span>
                                </label>
                            </span>
                        </section>
                    </div>
                </div>

                <div class="row" style="text-align:center;">
                    <div class="col-sm">
                        <section>
                            <span class="input input--hoshi">
                                <input class="input__field input__field--hoshi" type="date" id="input-4"
                                    name="Tournament_Date" required />
                                <label class="input__label input__label--hoshi input__label--hoshi-color-1"
                                    for="input-4">
                                    <span class="input__label-content input__label-content--hoshi">วันเวลา</span>
                                </label>
                            </span>
                        </section>
                    </div>
                    <div class="col-sm">
                        <section>
                            <span class="input input--hoshi">
                                <input class="input__field input__field--hoshi" type="text" id="input-4"
                                    name="Game_format" required />
                                <label class="input__label input__label--hoshi input__label--hoshi-color-1"
                                    for="input-4">
                                    <span class="input__label-content input__label-content--hoshi">รูปแบบการแข่ง</span>
                                </label>
                            </span>
                        </section>
                    </div>
                </div>
                <div class="row" style="text-align:center;">
                    <div class="col-sm">
                        <button class="bubbly-button" type="submit"><i id="plus"
                                class="fas fa-plus"></i>สร้างทัวร์นาเมนต์</button>
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>




<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="{{ asset('js/animatedModal.min.js') }}"></script>
<script>
    $("#demo01").animatedModal();


    // ------------------button----------------------

    var animateButton = function(e) {
  e.preventDefault;
  //reset animation
  e.target.classList.remove("animate");

  e.target.classList.add("animate");
  setTimeout(function() {
    e.target.classList.remove("animate");
  }, 700);
};

var bubblyButtons = document.getElementsByClassName("bubbly-button");

for (var i = 0; i < bubblyButtons.length; i++) {
  bubblyButtons[i].addEventListener("click", animateButton, false);
}

</script>
@endsection
