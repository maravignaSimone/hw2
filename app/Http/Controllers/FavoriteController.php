<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\User;
use App\Models\Recipe;
use App\Models\Star;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class FavoriteController extends Controller {

    public function index() {
        $session_id = session('user_id');
        $user = User::find($session_id);
        if (!isset($user))
            return view('signup');
        
        return view("my_recipes")->with("user", $user);
    }

    public function fetchFavorites(){
        $rows = Recipe::select('recipes.id as id', 'recipes.name as name', 'recipes.type as type', 'recipes.picture as picture')
                ->join('stars', 'recipes.id', '=', 'stars.recipe_id')
                ->where('stars.user_id', session('user_id'))->get();
        return $rows;
    }

}
?>