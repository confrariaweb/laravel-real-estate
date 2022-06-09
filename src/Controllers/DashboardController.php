<?php

namespace ConfrariaWeb\RealEstate\Controllers;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    public $data;


    public function __construct()
    {
        $this->data = [];
    }

    public function index()
    {
        return view('real-estate::dashboard.index');
    }


}
