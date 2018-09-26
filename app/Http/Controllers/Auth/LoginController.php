<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

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
    protected $redirectTo = '/profile';


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function login(Request $request)
    {
        // Check validation
        Validator::make($request->all(), [
            'phone' => 'required',
            'password' => 'required'
        ]);

        $user = \App\User::where(['phone' => $request->get('phone')])->first();


        $userdata = array(
            'phone' => Input::get('phone'),
            'password' => Input::get('password')
        );


        // attempt to do the login
        if (Auth::attempt($userdata)) {

            switch ($user->type) {
                case '0':
                    return redirect('/user'); //ادمن
                    break;
                case '1':
                    return redirect('/galleryProduct'); // مندوب
                    break;
                case '2':
                    return redirect('/dealerProductGallery'); //  تاجر
                    break;
                case '3':
                    return redirect('/farmerProduct'); // مزارع
                    break;
                case '4':
                    return redirect('/listDealerOrder'); // كول سنتر
                    break;
            }

        } else {
            return Redirect::to('login');

        }


    }

}
