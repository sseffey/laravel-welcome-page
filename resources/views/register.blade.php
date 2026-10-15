@extends('layout')

@section('title', 'Register')

@section('content')
    <h1>Register</h1>

    @if ($errors->any())
        <div class="error">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="/register" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name" value="{{ old('name') }}">
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="password_confirmation" placeholder="Confirm password">
        <button type="submit">Register</button>
    </form>

    <p class="link">Already have an account? <a href="/login">Login</a></p>
@endsection
