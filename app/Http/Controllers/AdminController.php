<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
            $imageName = time().'.'.$request->avatar->getClientOriginalExtension();
            $request->avatar->move(public_path('images'), $imageName);
            $user->avatar = "images/".$imageName;
            $user->save();
        }else{
            $user->save();
        }
        Alert::success('Success', 'You have successfully update your information.');
        return redirect()->back()
            ->with('success','You have successfully update your information.');
    }
}
