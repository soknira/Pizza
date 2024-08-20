@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/dashboard') }}">Dashboard</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif
    <div class="content">
        <div class="title m-b-md">
            <img src="../image/image copy.png" alt="pizza house logo"><br>
            Pizza Company<br />
            The North's Best Pizzas
         
        </div>
        <a href="{{route('pizza.create')}}">Order Now</a>
    </div>
    {{-- <footer>&copy; 2024 Pizza Company</footer> --}}
@endsection
