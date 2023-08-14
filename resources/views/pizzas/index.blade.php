@extends('layouts.app')

@section('content')
<div class="flex  justify-center">
    <div class="flex flex-col">
        <div class="title text-center">
            Pizza List
        </div>

        @foreach($pizzas as $pizza)
            <a href="{{ route('pizzas.show', $pizza->id) }}" class="p-4 mt-3 rounded w-full bg-gray-300">
                {{ $pizza->name }} - {{ $pizza->base }}  - R{{ $pizza->price }}
            </a>
        @endforeach

    </div>
</div>
@endsection
