<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    public function mainpage()
    {
        return view('mainpage');
    }

    public function tourspage()
    {
        return view('tourspage');
    }

    public function bikespage()
    {
        return view('bikespage');
    }

    public function equipmentspage()
    {
        return view('equipmentspage');
    }

    public function register()
    {
        return view('register');
    }

    public function autorization()
    {
        return view('autorization');
    }

    public function register_check(Request $request)
    {
        session_start();

        $valid = $request->validate(array(
            'full_name' => 'required|min:4|max:200',
            'login' => 'required|min:2|max:100',
            'email' => 'required|min:4|max:100',
            'password' => 'required|confirmed|min:1'
        ));

        $user = new Register();
        $user->full_name = $request->full_name;
        $user->login = $request->login;
        $user->email = $request->email;
        $user->password = md5($request->login.$request->password);

        $user->save();

        $_SESSION["user"] = $user;
        session(['user' => $user]);

        return redirect()->route('autorization');
    }

    public function autorization_check(Request $request)
    {
        session_start();

        $login = $request->login;
        $password = $request->password;
        $user = Register::where("login", $login)->where("password", md5($login.$password))->first();

        if($user)
        {
            return redirect()->route('mainpage');
        }
        else{
            return 'Error!';
        }
    }
}
