<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
 
use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    //
    public function index()
    {


        // $data['variableone'] = 'The value of variable one.';
        // $data['variabletwo'] = 'The value of variable two.';
        // return view('helloworld', $data);



        // $variableone = 'The value of variable one.';
        // $variabletwo = 'The value of variable two.'; 
        // return view('helloworld')->with(['variableone' => $variableone, 'variabletwo' => $variabletwo]);

        $data['variableone'] = 'The value of variable one.';
        $data['variabletwo'] = 'The value of variable two.';
        $data['variablethree'] = 'The value of variable three.'; 
        return view('helloworld')->with($data);

 
        
    }
}
