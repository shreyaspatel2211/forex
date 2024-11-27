<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SendMoneyAbroad;

class SendMoneyAbroadController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'send_money_to' => 'required|max:255',
            'purpose_of_remittance' => 'required|max:255',
            'city' => 'required|max:255',
        ]);

        SendMoneyAbroad::create([
            'country' => $validatedData['send_money_to'],
            'purpose' => $validatedData['purpose_of_remittance'],
            'amount' => $request->amount,
            'city' => $validatedData['city'],
        ]);

        return redirect()->back()->with('success', 'Your Inquiry saved successfully.');
    }

}
