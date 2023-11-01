<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CartController extends Controller
{
    //

    public function add(){

        Cart ::add([
            ['id' => '293ad', 
            'name' => 'Product 1', 
            'qty' => 1, 
            'price' => 10.00],
            ['id' => '4832k', 'name' => 'Product 2', 'qty' => 1, 'price' => 10.00, 'options' => ['size' => 'large']]
          ]);


    }
}
