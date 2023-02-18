<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paymentsController extends Controller
{
    public function paymentsCard(){
        return view('/Payments/Card');
    }
}
