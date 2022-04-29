<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;

class LocationController extends Controller
{
    private $pageId;

    public function __construct()
    {
        $this->pageId = 4;
    }

    public function index()
    {
        $page = Page::where('id', $this->pageId)->first();

        return view('front.location.index', [
            'page' => $page
        ]);
    }
}
