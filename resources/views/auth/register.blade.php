@extends('layouts.main')

@section('content')
 <div class="fondosesion">
    <main id="registro1" role="main">
    <form class="form-signin">
      <h1 id="text1registro" class="TxtHola">Ready for the best GameDev experience?</h1>
      <h1 id="text2registro" class="h6 mb-3 font-weight-normal">Be part of bigest community of game develorers, testers, gamers, teach and creative people.</h1>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                        
                            <div class="col-md-6">
                                <input id="userName" type="text" class="form-control{{ $errors->has('userName') ? ' is-invalid' : '' }}" name="userName" value="{{ old('userName') }}" required autofocus>

                                @if ($errors->has('userName'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('userName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                        
                            <div class="col-md-6">
                                <input id="inputEmail"  type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                        

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                           

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
        <p class="mt-5 mb-3 text-muted"> Already have an account?</p>
    </form>
     </main>
     </div>
@endsection