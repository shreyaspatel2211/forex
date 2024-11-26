<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoneyTransferController extends Controller
{
    public function index(Request $request)
    {
       
        return view('money_transfer');
    }
}
