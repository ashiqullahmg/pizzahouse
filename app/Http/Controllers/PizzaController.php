<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index(){
    $pizzas = [
        ['type' => 'Hawaiian', 'base' => 'cheesy crust'],
        ['type' => 'volcano', 'base' => 'garlic crust'],
        ['type' => 'veg supreme', 'base' => 'this & crispy'],
    ];
    $name = request('name');
    return view('pizzas', ['pizzas' => $pizzas, 'name' => request('name'),
    'age' => request('age')]);
    }

    public function show($id){
        return view('details', ['id' => $id]);
    }
}
