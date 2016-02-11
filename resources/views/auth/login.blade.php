

@extends('layouts.app')
@section('content')

    <div class="container">
    <div class="row">
        
        <div class="col m6">
            <h2 class="center-align">Login</h2>
            <div class="row">
                <form class="col s12" role="form" method="POST" action="{{ url('/login') }}">
                    {!! csrf_field() !!}
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="email" type="email" class="validate" value="{{ old('email') }}">
                            <label for="email">Email</label>
                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="password" type="password" class="validate">
                            <label for="password">Password</label>
                             @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <p>
                                <input type="checkbox" id="remember">
                                <label for="remember">Remember me</label>
                            </p>
                        </div>
                    </div>
                    <div class="divider"></div>
                     <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-large waves-effect waves-light">
                                    <!-- <i class="fa fa-btn fa-sign-in"></i> -->
                                    Login
                                </button>

                                <!-- <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a> -->
                            </div>
                        </div>

                    <!-- <div class="row">
                        <div class="col m12">
                            <p class="right-align">
                                <button class="btn btn-large waves-effect waves-light" type="submit" name="action"><i class="fa fa-btn fa-sign-in"></i>Login</button>
                            </p>
                        </div>
                    </div> -->
                </form>
            </div>
        </div>
    </div>
</div>

@endsection


