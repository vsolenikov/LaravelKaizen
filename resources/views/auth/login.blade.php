@extends('layouts.app')

@section('content')
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center"
         style="background-image: url(/images/phone.jpg);background-repeat: no-repeat; margin-top:0%;width:100%; height:100%">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xl-5 mb-4">

                    <!--Card-->
                    <div class="card formes" >
                        <div style="margin: 1% 60% -10% 40%"><img src="/images/kaizen.jpg"></div>
                        <br><br><br>
                        <h3 class="dark-grey-text text-center">
                            <strong>Вход</strong>
                        </h3>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}" style="    text-align: -webkit-center;">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">Эл. почта</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email"
                                               value="{{ old('email') }}">

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Пароль</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password">

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember"> Запомнить меня
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-btn fa-sign-in"></i> Войти
                                        </button>

                                        <a class="btn btn-link" href="{{ url('/password/reset') }}">Забыли пароль?</a>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
