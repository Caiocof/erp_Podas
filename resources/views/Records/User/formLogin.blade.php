<link rel="stylesheet" href="{{asset('css/login.css')}}">


<div class="limiter">
    <div class="container-login100">

        <div class="wrap-login100">
            @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{$error}}
                </div>
            @endforeach
            <form class="login100-form validate-form" method="POST" action="{{route('login.do')}}">
                @csrf
                <span class="login100-form-title p-b-26">
            <img src="{{asset('/image/logoLogin.png')}}" alt="Image Login">

            </span>
                <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
                    <input class="input100" type="email" name="email" placeholder="Email" value="{{old('email')}}">
                </div>
                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" name="pass" placeholder="Senha">
                </div>
                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


