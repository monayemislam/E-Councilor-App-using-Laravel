<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use SweetAlert;

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
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected function redirectTo()
    {
        $userInfo = Auth::user();
        if ($userInfo->role == 1) {
            alert()->success('লগিন সফল হয়েছে', 'স্বাগতম !')->persistent("ঠিক আছে")->autoclose(5000);
            return route('issue-list');
        } else{
            alert()->success('লগিন সফল হয়েছে', 'স্বাগতম !')->persistent("ঠিক আছে")->autoclose(5000);
            return route('submitted-issue');
        }
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
