<?php

namespace App\Http\Controllers;

use App\Food;
use App\Food_type;
use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods = Food::paginate(15);
        $food_types = Food_type::all();
        return view('admin.food.index',['foods' => $foods, 'food_types' => $food_types]);
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
        $food = new Food();
        $food->name = $request->input('name');
        $food->food_type_id = $request->input('food-type');
        $food->level = $request->input('level');
        $food->description = $request->input('description');
        $food->price = $request->input('price');

        if ($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $filenameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/food_images/',$filenameToStore);
        }else{
            $filenameToStore = 'noimage.jpg';
        }

        $food->image = $filenameToStore;
        $food->save();
        Alert::success('Success', 'You have successfully create new slider.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $food = Food::find($id);
        $food_types = Food_type::all();
        return view('admin.food.edit', ['food' => $food, 'food_types' => $food_types]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $food = Food::find($id);
        $food->description = $request->input('description');
        $food->level = $request->input('level');
        $food->price = $request->input('price');
        $food->food_type_id = $request->input('food-type');

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete('food_images/'.$food->image);
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $filenameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/food_images/',$filenameToStore);

            $food->image = $filenameToStore;
            $food->save();
        }else{
            $food->save();
        }
        Alert::success('Success', 'You have successfully update food.');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $food = Food::find($id);
        Storage::disk('public')->delete('food_images/'.$food->image);
        $food->delete();
        Alert::success('Deleted!', 'Your file has been deleted.');
        return redirect()->back();
    }

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
}
