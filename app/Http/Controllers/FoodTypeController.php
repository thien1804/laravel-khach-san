<?php

namespace App\Http\Controllers;

use App\Food_type;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FoodTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $food_types = Food_type::paginate(15);
        return view('admin.food-type.index',['food_types' => $food_types]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $food_type = new Food_type();
        $food_type->name = $request->input('name');
        $food_type->description = $request->input('description');

        $food_type->save();
        Alert::success('Success', 'You have successfully create new food type.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Food_type  $food_type
     * @return \Illuminate\Http\Response
     */
    public function show(Food_type $food_type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Food_type  $food_type
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $food_type = Food_type::find($id);
        return view('admin.food-type.edit',['food_type' => $food_type]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Food_type  $food_type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $food_type = Food_type::find($id);
        $food_type->name = $request->input('name');
        $food_type->description = $request->input('description');
        $food_type->save();

        Alert::success('Success', 'You have successfully update food type information.');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Food_type  $food_type
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $food_type = Food_type::find($id);
        $food_type->delete();

        Alert::success('Deleted!', 'Your food type has been deleted.');
        return redirect()->back();
    }

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
}
