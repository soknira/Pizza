@extends('layouts.layout')

@section('content')
    @if(session()->has("msg"))
     <div class="alert alert-success">  {{session()->get("msg")}}</div>
    @endif
    <form action="{{route('pizza.store')}}" method="post">
        @csrf  
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
             <label for="">Type</label>
             <select name="type" class="form-control">
                 <option value="">Selected</option>
                 <option value="Margherita">Margherita</option>
                 <option value="Pepperoni">Pepperoni</option>
                 <option value="BBQ Chicken">BBQ Chicken</option>
                 <option value="Vegetarian">Vegetarian</option>
             </select>
        </div>
        <div class="form-group">
            <label for="">Base</label>
            <select name="base" class="form-control">
                 <option value="">Selected</option>
                 <option value="Thin Crust">Thin Crust</option>
                 <option value="Thick Crust">Thick Crust</option>
                 <option value="Stuffed Crust">Stuffed Crust</option>
                 <option value="Flatbread">Flatbread</option>
            </select>
        </div>
        <div>
            <label for="">Topping</label>
            <input type="checkbox" class="form-check" name="topping[]" value="Pepperoni">Pepperoni
            <input type="checkbox" class="form-check" name="topping[]" value="Mushrooms">Mushrooms
            <input type="checkbox" class="form-check" name="topping[]" value="Bell Peppers">Bell Peppers
            <input type="checkbox" class="form-check" name="topping[]" value="Onions">Onions 
        </div>

        <button class="btn btn-success">Order</button>
        <a href="{{route('pizza.index')}}">Back to See Orders</button>
        <a href="/" style="margin-left: 20px">Go to Home</a>
    </form>
@endsection