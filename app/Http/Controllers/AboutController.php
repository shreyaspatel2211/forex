<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feature;
use App\Models\Review;

class AboutController extends Controller
{
    public function index()
    {
        $bottom_features = Feature::where('top_bottom', 'bottom')->get();
        $bottomCount = $bottom_features->count();
        $firstPart = $bottom_features->slice(0, ceil($bottomCount / 2));
        $secondPart = $bottom_features->slice(ceil($bottomCount / 2));

        $reviews = Review::get();

        return view('about', compact(
            'firstPart', 
            'secondPart', 
            'reviews'
        ));
    }
}
