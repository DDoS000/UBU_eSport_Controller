
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/login.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
</head>
<body>

	<a href="{{ url('/') }}">
		<img src="{{asset('images/left.svg')}}" id="btn-back" alt="back" srcset="">
	</a>
	<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form method="POST" action="{{ route('register') }}">
			@csrf
			<h1>สร้างบัญชี</h1>
			<span>เพื่อเริ่มสร้างแมตช์การสตรีมเกมของคุณ</span>
			<input type="text" placeholder="ชื่อ" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus/>
			@error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
			@enderror
			<input type="email" id="email" placeholder="อีเมล" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" />
			@error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
			<input type="password" id="password" placeholder="รหัสผ่าน" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" />
			@error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
			<input type="password" id="password-confirm" placeholder="ยืนยันรหัสผ่าน" class="form-control" name="password_confirmation" required autocomplete="new-password" />
			<button type="submit">ลงทะเบียน</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form method="POST" action="{{ route('login') }}">
            @csrf
			<h1>เข้าสู่ระบบ</h1>
			<span>เพื่อดำเนินการควบคุมการสตรีมเกมของคุณ</span>
			<input type="email" name="email" placeholder="อีเมล" value="{{ old('email') }}"/>
			@error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
			<input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="รหัสผ่าน" />

			@error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

			<!-- @if (Route::has('password.request'))
			<a href="{{ route('password.request') }}">ลืมรหัสผ่าน ?</a>
			@endif -->
			<button type="submit">เข้าสู่ระบบ</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>เราคือระะบบการจัดการ การแข่งขันที่ดีที่สุดในระดับมหาวิทยาลัย</p>
				<button class="ghost" id="signIn">เข้าสู่ระบบ</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1 id="text">UBU E-SPORT</h1>
				<h1 id="text">CONTROLLER</h1>
				<p>ลงชื่อเข้าใช้งานเพื่อควบคุม overlay ในการสตรีมเกมของคุณ!! </p>
				<button class="ghost" id="signUp">ลงทะเบียน</button>
			</div>
		</div>
	</div>
</div>



<script>

	// ----------randomtext--------

	// var text = document.getElementById("text");
	// var word = text.getElementsByTagName("span");
	// var i=0;
	// function rorator(){
	// 	word[i].style.display = "none";
	// 	i = (i+1)%word.length;
	// 	word[i].style.display = "initial";
	// }
	// setInterval(rorator,2000);


const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});

</script>

</body>
</html>




