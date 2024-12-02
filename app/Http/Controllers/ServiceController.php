<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feature;
use App\Models\Review;
use App\Models\Service;
use App\Models\Country;
use App\Models\TopCity;
use App\Models\SendMoneyOption;

class ServiceController extends Controller
{
    public function index($id)
    {
        $top_features = Feature::where('top_bottom', 'top')->get();

        $bottom_features = Feature::where('top_bottom', 'bottom')->get();
        $bottomCount = $bottom_features->count();
        $firstPart = $bottom_features->slice(0, ceil($bottomCount / 2));
        $secondPart = $bottom_features->slice(ceil($bottomCount / 2));

        $reviews = Review::get();

        $popular_services = Service::where('service_type', 'popular_services')->get();
        $study_abroad_services = Service::where('service_type', 'study_abroad')->get();

        $countries = Country::where('show_in_send_money_form', 1)->get();
        $topcities = TopCity::all();
        $send_money_options = SendMoneyOption::all();

        $services = Service::findOrFail($id);
        $transfer_money_to_countries = Country::where('transfer_money', 1)->get();
        $availabel_for_direct_outward_remittence = Country::where('availabel_for_direct_outward_remittence', 1)->get();

        return view('service', compact(
            'top_features',
            'firstPart', 
            'secondPart', 
            'reviews', 
            'popular_services', 
            'study_abroad_services', 
            'countries', 
            'topcities',
            'send_money_options',
            'availabel_for_direct_outward_remittence',
            'transfer_money_to_countries',
            'services'
        ));
    }
}
