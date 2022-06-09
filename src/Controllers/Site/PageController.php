<?php

namespace ConfrariaWeb\RealEstate\Controllers\Site;

use App\Http\Controllers\Controller;

class PageController extends Controller
{

    public function __construct(){
        //
    }

    public function index()
    {
        return view('real-estate-storage::templates.agents.home');
    }

}
