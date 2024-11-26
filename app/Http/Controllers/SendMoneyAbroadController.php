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
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
        ]);

        SendMoneyAbroad::create([
            'country' => $validatedData['send_money_to'],
            'purpose' => $validatedData['purpose_of_remittance'],
            'amount' => $request->amount,
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'city' => $validatedData['city'],
        ]);

        return redirect()->back()->with('success', 'Your Inquiry saved successfully.');
    }

}
