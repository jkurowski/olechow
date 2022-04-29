<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// CMS
use App\Models\Slider;
use App\Models\RodoRules;

class IndexController extends Controller
{

    public function index(Request $request)
    {
        $sliders = Slider::all()->sortBy("sort");
        $rules = RodoRules::orderBy('sort')->whereStatus(1)->get();

        return view('front.homepage.index', compact(
            'rules',
            'sliders',
        ));
    }

}
