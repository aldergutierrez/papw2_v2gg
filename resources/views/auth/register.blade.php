@extends('layouts.main')

@section('content')
 <div class="fondosesion">
    <main id="registro1" role="main">
    <form class="form-signin">
      <h1 id="text1registro" class="TxtHola">Ready for the best GameDev experience?</h1>
      <h1 id="text2registro" class="h6 mb-3 font-weight-normal">Be part of bigest community of game develorers, testers, gamers, teach and creative people.</h1>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group ">
                        
                            
                                <input id="userName" type="text" placeholder="User name" class="form-control{{ $errors->has('userName') ? ' is-invalid' : '' }}" name="userName" value="{{ old('userName') }}" required autofocus>

                                @if ($errors->has('userName'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('userName') }}</strong>
                                    </span>
                                @endif
                            
                        </div>


                        <div class="form-group ">
                        
                            
                                <input id="inputEmail"  type="email" placeholder="Email address" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                        <div class="form-group ">
                        

                            
                                <input id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                        <div class="form-group">
                           

                            
                                <input id="password-confirm" type="password" placeholder="Confirm password" class="form-control" name="password_confirmation" required>
                            
                        </div>

                        <div class="form-group mb-0">
                            
                                <button type="submit" id="btn-registro" class="btn btn-lg btn-primary btn-block">
                                    {{ __('Register') }}
                                </button>
                            
                        </div>
                        <div class="form-group">
                                  <p class="mt-5 mb-3 text-muted"> Already have an account?</p>
                        </div>
    </form>
    </form>
     </main>
     </div>
@endsection