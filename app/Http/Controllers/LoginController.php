<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller {

    public function index() {
        if(session('user_id') != null) {
            return redirect("home");
        }
        else {
            return view('login');
        }
    }

    public function checkLogin(){
        $user = User::where('username', request('username'))->where('password', request('password'))->first();

        if($user !== null) {
            Session::put('user_id', $user->id);
            return redirect('home');
        }
        else {
            return view('login')
            ->with("error", "Username e/o Password errati");
        }
    }

    public function logout() {
        Session::flush();
        return redirect('login');
    }
}
?>