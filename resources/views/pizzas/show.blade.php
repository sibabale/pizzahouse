@extends('layouts.app')

@section('content')
<div class="flex flex-col items-center">
    <h1 class="mb-5 text-4xl underline">Order For {{$pizza->name}}</h1>
    <ul class="flex flex-col items-start">
        <li>
            <p>Type - {{$pizza->type}}</p>
        </li>
        <li>
            <p>Base - {{$pizza->base}}</p>
        </li>
        <li>
            <p>Extra toppings:</p>

        </li>
    </ul>
    <ol class="flex flex-col items-start">
        @foreach($pizza->toppings as $topping)
        <li class="list-disc">{{$topping}}</li>
        @endforeach
    </ol>
    <form action="{{ route('pizzas.destroy', $pizza->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="border rounded p-2 mt-5">Complete Order</button>
    </form>
</div>
@endsection

