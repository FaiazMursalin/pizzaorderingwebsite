<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index(){
        //get data from db
    //$pizzas = Pizza::all();
    // $pizzas = Pizza::orderBy('base')->get();
    // $pizzas = Pizza:: where('type','hawaian')->get();
    $pizzas = Pizza::latest()->get();
 

    return view('pizzas.index',[
        'pizzas' => $pizzas,    
    ]);
    }
    public function show($id){
    //use the $id variable to query through the db for the record 
    $pizza = pizza::findOrFail($id);
    //should do validation too if id is a number or not 
    return view('pizzas.show', ['pizza' => $pizza]);
    }
    public function create(){
        return view('pizzas.create');
    }
    public function store(){
        // request('name');
        // request('type');
        // request('base');

        $pizza = new Pizza();
        $pizza-> name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');
        //transform the array to json field for that column


        $pizza->save();

        
        return redirect('/')->with('mssg','Thanks for your order');
    }
    public function destroy($id){
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();
        return redirect('/pizzas');


    }
}
