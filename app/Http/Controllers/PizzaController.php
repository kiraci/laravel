<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index(){
        $pizzas = [
            ['type' => 'hawaiian', 'base' => 'cheesy crust', 'price' => 10],
            ['type' => 'volcano', 'base' => 'garlic crust', 'price' => 15],
            ['type' => 'veg supreme', 'base' => 'thin & crispy', 'price' => 6]
        ]; 
    
        return view('pizzas', [ 
            'pizzas' => $pizzas,
            'name' => request('name'),
            'age' => request('age')
         ]);
    }
    

    public function show( $id ){
        return view('details', [ 'id' => $id ]);
    }
    
}
