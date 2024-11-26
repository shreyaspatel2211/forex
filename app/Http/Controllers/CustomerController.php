<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function store(Request $request)
    {
        // Validate input data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email',
            'phone_number' => 'required|string|max:20',
            'from' => 'required|string|max:255',
            'to' => 'required|string|max:255',
            'visa_plan' => 'required|string|max:255',
            'visa_purpose' => 'required|string|max:255',
        ]);

        // Create new customer record
        $customer = Customer::create($validatedData);

        return response()->json([
            'message' => 'Customer created successfully',
            'data' => $customer,
        ], 201);
    }
}
