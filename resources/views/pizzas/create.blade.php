@extends('layouts.app')

@section('content')
<div classs="flex">
    <h1>Create a New Pizza</h1>
    <form action="/pizzas" method="POST">
        @csrf
        <label for="name">Your name:</label>
        <input type="text" name="name" id="name">
        <label for="type">Choose pizza type:</label>
        <select name="type" id="type">
            <option value="margherita">Margherita</option>
            <option value="hawaiian">Hawaiian</option>
            <option value="vocano">Volcano</option>
            <option value="veggie">Veggies</option>
        </select>
        <label for="base">Choose pizza base:</label>
        <select name="base" id="base">
            <option value="cheesy crust"d>Cheesy Crust</option>
            <option value="garlic crust">Garlic Crust</option>
            <option value="thin and crust">Thin and crusty</option>
            <option value="Thin">Veggies</option>
        </select>
        <label for="price">Price:</label>
        <input type="number" name="price" id="price">

        <fieldset>
            <label for="">Extra toppings</label>
            <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br/>
            <input type="checkbox" name="toppings[]" value="pepper">Pepper<br/>
            <input type="checkbox" name="toppings[]" value="garlic">Garlic<br/>
            <input type="checkbox" name="toppings[]" value="olives">Olives<br/>
        </fieldset>
        <input type="submit" value="Order Pizza" style="border: '1px solid black'">
    </form>
</div>
@endsection
