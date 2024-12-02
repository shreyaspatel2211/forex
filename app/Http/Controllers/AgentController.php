<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;
use App\Models\Feature;
use App\Models\WhyChooseForexrate;
use App\Models\Country;
use App\Models\City;
use App\Models\State;
use App\Models\Agent;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AgentController extends Controller
{
    public function index()
    {
        $faqs = Faq::where('service_id', 7)->get();
        $top_features = Feature::where('top_bottom', 'top')->get();
        $why_choose_forexrates = WhyChooseForexrate::get();
        $countries = Country::where('show_in_send_money_form', 1)->get();
        $cities = City::where('country_id', 101)->get();
        $states = State::where('country_id', 101)->get();

        return view('agent_form', compact(
            'faqs',
            'top_features',
            'why_choose_forexrates',
            'countries',
            'cities',
            'states'
        ));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'business_name' => 'required|string|max:255',
            'business_address' => 'required|string|max:255',
            'agent_type' => 'required|array',
            'country' => 'required|array',
            'currency' => 'required|array',
            'business_city' => 'required',
            'business_state' => 'required',
            'business_zip_code' => 'nullable|string|max:20',
            'business_phone' => 'nullable|string|max:20',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'contact_number' => 'nullable|string|max:20',
            'username' => 'required|string|max:50',
            'password' => 'required|string|min:6',
        ]);

        $user = new User();
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->role_id = 1;
        $user->password = Hash::make($validated['password']); 
        $user->username = $validated['username'];
        $user->status = 'pending';
        $user->save();

        $agent = new Agent();
        $agent->business_name = $validated['business_name'];
        $agent->business_address = $validated['business_address'];
        $agent->agent_type = json_encode($validated['agent_type']);
        $agent->country = json_encode($validated['country']);
        $agent->currency = json_encode($validated['currency']);
        $agent->business_city = json_encode($validated['business_city']);
        $agent->business_state = json_encode($validated['business_state']);
        $agent->business_zip_code = $validated['business_zip_code'];
        $agent->business_phone = $validated['business_phone'];
        $agent->contact_number = $validated['contact_number'];
        $agent->user_id = $user->id; 
        $agent->save();

        return redirect()->back()->with('success', 'Agent and user added successfully!');
    }

    public function AgentsWithMap(Request $request)
    {
        $locations = Agent::select('latitude', 'longitude', 'business_name', 'business_address', 'business_email', 'business_phone')->get();

        return view('agents_map', compact('locations'));
    }
}
