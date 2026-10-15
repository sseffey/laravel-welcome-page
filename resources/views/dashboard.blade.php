@extends('layout')

@section('title', 'Dashboard')

@section('content')
    <h1>Dashboard</h1>

    <div class="message">Welcome, {{ auth()->user()->name }}!</div>
    <p>{{ auth()->user()->email }}</p>

    <form action="/logout" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
@endsection
