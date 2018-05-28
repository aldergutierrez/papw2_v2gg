@extends('layouts.main')

@section('content')
<div class="fondosesion">
    <main id="registro1" role="main">
        <form class="form-signin">
             <h1 class="TxtHola">Konnichiwa.</h1>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Enter your username or email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif


                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Enter your password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif


                                <div class="checkbox">
                                    <label class="cbfont">
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>




                                <button type="submit" id="btn-registro" class="btn btn-lg btn-primary btn-block">
                                    {{ __('Login') }}
                                </button>

                                <a class="mt-5 mb-3 text-muted" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>


                    </form> 
    </form>
    </main>
</div>
@endsection
