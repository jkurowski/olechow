<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;

class HowToBuyController extends Controller
{

    public function index()
    {
        $page = Page::where('id', 3)->first();

        return view('front.howtobuy.index', [
            'page' => $page
        ]);
    }

}
