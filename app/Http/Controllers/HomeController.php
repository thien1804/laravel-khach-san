<?php

namespace App\Http\Controllers;

use App\Food;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $foods = Food::all();
        $foods_main = $foods->filter(function ($value, $key) {
            return $value["food_type_id"] == 1;
        });
        $foods_dessert = $foods->filter(function ($value, $key) {
            return $value["food_type_id"] == 3;
        });
        $foods_drink = $foods->filter(function ($value, $key) {
            return $value["food_type_id"] == 4;
        });
        return view('home',
            [
                'foods_main' => $foods_main,
                'foods_dessert' => $foods_dessert,
                'foods_drink' => $foods_drink
            ]);
    }
}
