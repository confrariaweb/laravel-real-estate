<?php

namespace ConfrariaWeb\RealEstate\Controllers\Site;

use App\Http\Controllers\Controller;
use ConfrariaWeb\Site\Models\Site;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        //
    }

    public function index(Request $request)
    {
        //dd($request->segments());
        return view('real-estate-storage::templates.anony.index');
    }

}
