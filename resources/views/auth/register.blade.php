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
        <form role="form" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">Име:</label>

                <div class="col-md-6">
                    <input type="text" name="name" value="{{ old('name') }}" required>

                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">Имейл:</label>

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
                <label for="password" class="col-md-4 control-label">Парола:</label>

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
                <label for="password-confirm" class="col-md-4 control-label">Повторете паролата:</label>
                <div class="col-md-6">
                    <input type="password" name="password_confirmation" required>
                </div>
            </div>
            <button type="submit" id="submit"> Вход</button>
        </form>
    </div>
    <br/>
    <br/>
    <br/>
    <br/>
    @include('layouts.Footer')

@endsection