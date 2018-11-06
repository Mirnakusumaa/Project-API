<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Kris\LaravelFormBuilder\FormBuilder;
use App\Http\Requests;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    public function index(){
        return view('master');
    }

    public function postLogin(Request $request){

        $info=User::where('username',$request->username)->first();
        if(is_null($info)){
            // Alert::error('Maaf, Username atau Password Anda Salah!')->persistent('OK');
            return redirect()->back();
        }
        
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            // $this->cekjatahcuti();
            // Alert::success('Login Berhasil');
            return redirect('dashboard');
        }
        
        // Alert::error('Maaf, Username atau Password Anda Salah!')->persistent('OK');
        return redirect()->back();
    }

    public function logout(Request $request)
    {
        Auth::guard()->logout();
        $request->session()->invalidate();
        return redirect('/');
    }
    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
