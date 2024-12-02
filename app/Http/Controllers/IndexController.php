<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feature;
use App\Models\Review;
use App\Models\Service;
use App\Models\Country;
use App\Models\TopCity;
use App\Models\SendMoneyOption;

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

        $popular_services = Service::where('service_type', 'popular_services')->orderBy('order', 'asc')->get();
        $study_abroad_services = Service::where('service_type', 'study_abroad')->get();

        $countries = Country::where('show_in_send_money_form', 1)->get();
        $topcities = TopCity::all();
        $send_money_options = SendMoneyOption::all();

        return view('index', compact(
            'top_features',
            'firstPart', 
            'secondPart', 
            'reviews', 
            'popular_services', 
            'study_abroad_services', 
            'countries', 
            'topcities',
            'send_money_options'
        ));
    }

    // public function getConvertedAmount(Request $request)
    // {
    //     $baseCurrency = $request->base_currency;
    //     $amount = $request->amount;
    //     $toCurrency = 'INR'; 
    //     $apiKey = env('CURRENCY_EXCHANGE_API_KEY');

    //     $curl = curl_init();

    //     curl_setopt_array($curl, [
    //         CURLOPT_URL => "https://anyapi.io/api/v1/exchange/convert?base=$baseCurrency&to=$toCurrency&amount=$amount&apiKey=$apiKey",
    //         CURLOPT_RETURNTRANSFER => true,
    //         CURLOPT_ENCODING => "",
    //         CURLOPT_MAXREDIRS => 10,
    //         CURLOPT_TIMEOUT => 30,
    //         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //         CURLOPT_CUSTOMREQUEST => "GET",
    //     ]);

    //     $response = curl_exec($curl);
    //     $err = curl_error($curl);

    //     curl_close($curl);

    //     if ($err) {
    //         return response()->json(['error' => 'Unable to fetch conversion rate.']);
    //     } else {
    //         $data = json_decode($response, true);
    //         return response()->json(['converted' => $data['converted'] ?? 0]);
    //     }
    // }

    public function getConvertedAmount(Request $request)
    {
        $amount = $request->amount;
        $toCurrency = $request->base_currency;

        $apiKey = env('EXCHANGE_RATE_API_KEY'); 

        $url = "https://api.exchangeratesapi.io/v1/latest?access_key=$apiKey";

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return response()->json(['error' => 'Unable to fetch exchange rates.']);
        } else {
            $data = json_decode($response, true);

            if (isset($data['success']) && $data['success'] && isset($data['rates'])) {
                $rates = $data['rates'];

                if (isset($rates[$toCurrency]) && isset($rates['INR'])) {
                    $convertedAmount = ($amount / $rates[$toCurrency]) * $rates['INR'];
                    $formattedAmount = number_format($convertedAmount, 2);
                    return response()->json(['converted' => $formattedAmount]);
                } else {
                    return response()->json(['error' => 'Conversion rate not available for the selected currency.']);
                }
            } else {
                return response()->json(['error' => 'Invalid response from exchange rate API.']);
            }
        }
    }

}
