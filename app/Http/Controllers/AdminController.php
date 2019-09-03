<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard');
    }
    public function edit()
    {
        return view('admin.update-info');
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $name = $request->input('name');

        $user->name = $name;

        if ($request->hasFile('avatar')) {
            Storage::disk('public')->delete('avatar_admin_images/'.$user->avatar);
            $filenameWithExt = $request->file('avatar')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('avatar')->getClientOriginalExtension();
            $filenameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('avatar')->storeAs('public/avatar_admin_images/',$filenameToStore);

            $user->avatar = $filenameToStore;
            $user->save();
        }else{
            $user->save();
        }
        Alert::success('Success', 'You have successfully update your information.');
        return redirect()->back();
    }
}
