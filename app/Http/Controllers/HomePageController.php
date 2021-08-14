<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public  function index()
    {
        $pizze = Pizza::take(6)->orderBy('id', 'DESC')->get();
        $pizzaList = Pizza::all();
        $counter = $pizzaList->count()/2;
        $data = [
            'pizze'=>$pizze,
            'pizzaList'=>$pizzaList,
            'counter'=>$counter
        ];
        return view ('frontend.home')->with('data',$data);
    }
}
