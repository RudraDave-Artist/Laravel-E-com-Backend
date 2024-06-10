<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function signup()
    {
        return view('App2/sign');
    }
    public function validation(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'unique:users', 'email', 'bail'],
            'password' => ['required', 'min:7', 'confirmed']
        ]);
        $user_id=auth()->id();
        if ($validated) {
            DB::table('users')->insert([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => bcrypt($validated['password']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            return redirect()->route('index');
        } else {
            return back()->withInput($request->except('password'));
        }
    }
    public function signin()
    {
        return view("App2/signin");
    }
    public function loginvalidation(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $remember=$request->input('remember_me');
        if (Auth::attempt($credentials,$remember)) {
            return redirect()->route('index');
        } else {
            return back()->withErrors(['email' => 'Invalid credentials'])->withInput($request->only('email'));
        }
    }
    public function logout(Request $request){
        Auth::logout();
  return redirect()->route('home');
    }
}
