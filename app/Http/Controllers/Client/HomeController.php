<?php

namespace App\Http\Controllers\Client;

use App\Factories\AdminFactory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // protected $sliderRepository;
    public function __construct()
    {
        // $this->sliderRepository = AdminFactory::sliderClientRepository();
    }

    public function home(Request $request)
    {
        return view("clients.home");
    }
}
