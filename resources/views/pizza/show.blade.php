@extends('layouts.layout')
    @section('content')
    <div class="form-control">
        <h3>Here is the Specific Pizza</h3>
        {{$pizza->name}} <br>
        {{$pizza->type}} <br>
        {{$pizza->base}} <br>
        @foreach(json_decode($pizza->topping) as $piz)
            {{$piz}}
        @endforeach
    </div>
    @endsection