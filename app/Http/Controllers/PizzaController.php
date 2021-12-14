<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index(){
        //get data from db
    $pizzas = [
        ['type'=> 'hawaiian', 'base'=> 'cheesy crust' ],
        ['type'=> 'meat', 'base'=> 'thin crust' ],
        ['type'=> 'chicken', 'base'=> 'thick crust' ]
    ];
    // $name = request('name');
    // $age = request('age');

    return view('pizzas',[
        'pizzas' => $pizzas,
        'name' => request('name'),
        'age' => request('age')
    ]);
    }
    public function show($id){
        //use the $id variable to query through the db for the record 
    //should do validation too if id is a number or not 
    return view('details', ['id' => $id]);
    }
}
