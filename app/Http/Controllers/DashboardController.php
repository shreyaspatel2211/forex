<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;
use Illuminate\Http\Request;

class DashboardController extends VoyagerBaseController
{
    public function index(Request $request)
    {
        return view('vendor.voyager.index');
    }

}
