@extends('layouts.app')
@section('title', 'Login')
@section('content')

<div class="login-wrapper">
    <div class="login-card">
        <p class="login-label">WELCOME TO</p>

        <h1>
            ELORA
            <br>
            Healing Studio
        </h1>

        <p class="login-description">
            A Little Time for Yourself, A Moment to Feel Better.
        </p>

        <form action="/login"
                method="POST">
            @csrf

            <label>Username</label>
            <input
                type="text"
                name="username"
                placeholder="Masukkan username"
                value="{{ old('username') }}">

            @if ($errors->has('username'))
                <p class="error">
                    {{ $errors->first('username') }}
                </p>
            @endif

            <button type="submit">
                Login
            </button>
        </form>

        <p class="login-footer">
            Your wellness journey starts here.
        </p>
    </div>
</div>

@endsection
