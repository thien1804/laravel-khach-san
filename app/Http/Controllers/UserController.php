<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit()
    {
        return view('update-info');
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $name = $request->input('name');
        $phone_number = $request->input('phone_number');
        $birth_day = $request->input('birth_day');
        $address = $request->input('address');

        $user->name = $name;
        $user->phone_number = $phone_number;
        $user->birth_day = $birth_day;
        $user->address = $address;

        if ($request->hasFile('avatar')) {
            Storage::disk('public')->delete('avatar_admin_images/'.$user->avatar);
            $filenameWithExt = $request->file('avatar')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('avatar')->getClientOriginalExtension();
            $filenameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('avatar')->storeAs('public/avatar_user_images/',$filenameToStore);

            $user->avatar = $filenameToStore;
            $user->save();
        }else{
            $user->save();
        }
        Alert::success('Success', 'You have successfully update your information.');
        return redirect()->back()
            ->with('success','You have successfully update your information.');
    }
}
