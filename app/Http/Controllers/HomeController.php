<?php

namespace App\Http\Controllers;

use App\Model\CarModel;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         $carModels = CarModel::with(['company', 'year'])->limit(3)->get();
        return view('home', compact('carModels'));
    }
}
