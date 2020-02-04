<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    //
    public function create($number = 2)
{
    for($i =1; $i <= 10 ; $i++){
        echo "$i * $number = ". $i* $number ."<br>";
    }
}
}
