@extends('layout')

@section('title', 'Login')

@section('content')
    <h1>Login</h1>

    @if ($errors->any())
        <div class="error">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="/login" method="POST">
        @csrf
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Login</button>
    </form>

    <p class="link">Don't have an account? <a href="/register">Register</a></p>
@endsection
