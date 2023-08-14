@extends('layouts.layout')

@section('content')
<div class="flex flex-col justify-center">
    @if (Route::has('login'))
        <div class="flex justify-end p-5 top-right links border">
            @auth
                <a href="{{ url('/home') }}" class="px-5">Home</a>
            @else
                <a href="{{ route('login') }}" class="px-5">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="flex justify-center">
        <div class="flex flex-col items-center">
            <img src="/img/pizza-house.png" alt="pizza house logo">
            <div class="title text-center text-3xl w-full">
                The North's Best Pizzas
            </div>
            <p>{{ session('msg') }}</p>
            <a
                href="{{route('pizzas.create') }}"
                class="p-3 border rounded text-center my-4 w-fit"
            >
                Order a Pizza
            </a>
        </div>
    </div>
</div>
@endsection
