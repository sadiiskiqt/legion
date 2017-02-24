@extends('layouts.app')

@section('content')

    <!-- Navbar -->
    @include('Navbar.Navbar')
    <!-- Navbar End -->
    <br/>
    <br/>
    <br/>
    <br/>

    <div class="container">
        <div class="sep"></div>
        <form id="signup" role="form" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">Имейл</label>

                <div class="col-md-6">
                    <input type="email" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-4 control-label">Парола</label>

                <div class="col-md-6">
                    <input type="password" name="password" required>

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
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Запомни ме!
                        </label>
                    </div>
                </div>
            </div>

            <button type="submit" id="submit"> Вход</button>

            <a class="no" href="{{ route('password.request') }}">
                Забравена парола?
            </a>
            <a class="no" href="{{ route('register') }}">
                Нова регистрация!
            </a>
        </form>
    </div>
    <br/>
    <br/>
    <br/><br/><br/>
    @include('layouts.Footer')

@endsection
