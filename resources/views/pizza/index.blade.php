
@extends('layouts.layout')

    @section('content')
      @foreach ($pizzas as $pizza)
        {{$pizza->name}} <br>
        {{$pizza->type}} <br>
        {{$pizza->base}} <br>
      
        @foreach(json_decode($pizza->topping) as $piz)
          {{$piz}}
        @endforeach
             
    
    <a href="{{route('pizza.create')}}">order</a>
    <a href="{{route('pizza.show',$pizza->id)}}">Show</a>
    <form action="{{route('pizza.destroy',$pizza->id)}}" method="POST">
         @csrf 
         @method("DELETE")
         <button id="btn-cancel" type="submit" class="btn btn-success">Cancel Order</button>
    </form>
    @endforeach
  @endsection