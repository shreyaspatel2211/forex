<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feature;
use App\Models\Review;
use App\Models\Service;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $top_features = Feature::where('top_bottom', 'top')->get();

        $bottom_features = Feature::where('top_bottom', 'bottom')->get();
        $bottomCount = $bottom_features->count();
        $firstPart = $bottom_features->slice(0, ceil($bottomCount / 2));
        $secondPart = $bottom_features->slice(ceil($bottomCount / 2));

        $reviews = Review::get();

        $popular_services = Service::where('service_type', 'popular_services')->get();
        $study_abroad_services = Service::where('service_type', 'study_abroad')->get();

        return view('index', compact('top_features','firstPart', 'secondPart', 'reviews', 'popular_services', 'study_abroad_services'));
    }

}
