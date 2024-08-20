<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index(){
        $pizzas = Pizza::all();
         return view("pizza.index",compact("pizzas"));
    }

    public function create(){
         return view("pizza.create");
    }

    public function store(Request $request){
        $pizza = new Pizza();
        $pizza->name    = $request->name;
        $pizza->type    = $request->type;
        $pizza->base    = $request->base;
        $pizza->topping = json_encode($request->topping);
        $pizza->save();   
        return redirect()->back()->with("msg","Created successfully");   
    }

    public function show($id){
        $pizza = Pizza::findOrfail($id);
        return view("pizza.show",compact("pizza"));
    }

    public function destroy($id){
       $pizza = Pizza::findOrfail($id);
       $pizza->delete();
       return redirect()->back();
    }
}
