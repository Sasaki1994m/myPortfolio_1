<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
    protected $redirectTo = '/admin/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
    {
     $this->middleware('guest:admin')->except('logout');
    
    //  $this->redirectPath = route('timestamp.list');
    //  $this->loginPath = route('timestamp.list');
    //  $this->redirectAfterLogout = route('logout');
    }    
    public function showLoginForm()
    {
        // var_dump(__LINE__);die;
        return view('admin.login');  //変更
    }
    protected function guard()
    {
        return Auth::guard('admin');  //変更
    }
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();  //変更
        $request->session()->flush();
        $request->session()->regenerate();
 
        return redirect('/admin/login');  //変更
    }
    
}
