<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// CMS
use App\Models\Slider;
use App\Models\RodoRules;
use Illuminate\Support\Facades\Cookie;
use App\Models\Property;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $sliders = Slider::all()->sortBy("sort");
        $rules = RodoRules::orderBy('sort')->whereStatus(1)->get();
        $properties = Property::where('homepage', 1)->get();
        $popup = 0;

        if(settings()->get("popup_status") == "1") {
            if(settings()->get("popup_mode") == "1") {
                Cookie::queue('popup', null);
                $popup = 1;
            } else {
                if(Cookie::get('popup') == null){
                    $popup = 1;
                    Cookie::queue('popup', true);
                }
            }
        } else {
            Cookie::queue('popup', null);
        }

        return view('front.homepage.index', compact(
            'rules',
            'sliders',
            'popup',
            'properties'
        ));
    }

}
