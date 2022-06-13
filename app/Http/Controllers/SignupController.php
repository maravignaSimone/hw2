<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SignupController extends Controller {

    protected function signup(){
        $request = request();
        if($this->countErrors($request) === 0){
            $newUser =  User::create([
                'username' => $request['username'],
                'password' => $request['password'],
                'email' => $request['email'],
                'name' => $request['name'],
                'surname' => $request['surname'],
                'phone' => $request['phone'],
                ]);
                if($newUser){
                    Session::put('user_id', $newUser->id);
                    return redirect('home');
                }
                else
                    return redirect('signup');
        }
        else
            return redirect('signup');
    }

    private function countErrors($data){
        $error = array();

        if(!preg_match('/^[a-zA-Z0-9]{1,16}$/', $data['username'])){
            $error[] = "Username non valido";
        }
        else{
            $username = User::where('username', $data['username'])->first();
            if($username !== null){
                $error[] = "Username già in uso";
            }
        }

        //Password
        if(!preg_match('/^(?=.*[0-9])(?=.*[!@#$%^&*_])[a-zA-Z0-9!@#$%^&*_]{8,16}$/', $data['password'])){
            $error[] = "Password non valida";
        }

        //Conferma password
        if (strcmp($data["password"], $data["confirm_password"]) != 0) {
            $error[] = "Le password non coincidono";
        }

        //Email
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $error[] = "Email non valida";
        } else {
            $email = User::where('email', $data['email'])->first();
            if ($email !== null) {
                $error[] = "Email già utilizzata";
            }
        }
        return count($error);
    }

    public function checkUsername($username) {
        $exist = User::where('username', $username)->exists();
        return ['exists' => $exist];
    }

    public function checkEmail($email) {
        $exist = User::where('email', $email)->exists();
        return ['exists' => $exist];
    }

    public function index() {
        if(session('user_id') != null) {
            return redirect("home");
        }
        else {
            return view('signup');
        }
    }

}
?>