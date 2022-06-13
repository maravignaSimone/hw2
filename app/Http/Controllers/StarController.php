<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\Star;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class StarController extends Controller {
    public function uploadStar(){
        $request = request();
        $row = Star::where('user_id', session('user_id'))
                ->where('recipe_id', $request['recipeid'])->first();   
        if($row)
            return ['full' => true];
        else
            return ['full' => false];
    }

    public function starRecipe(){
        $request = request();
        $favorite = new Star;
        $favorite->user_id = session('user_id');
        $favorite->recipe_id = $request['recipeid'];
        $favorite->save();
        if($favorite)
            return ['add' => true];
        else
            return ['add' => false];
    }

    public function unstarRecipe(){
        $request = request();
        $unfavorite = Star::where('user_id', session('user_id'))
        ->where('recipe_id', $request['recipeid'])->delete();
        if($unfavorite)
            return ['remove' => true];
        else
            return ['remove' => false];
    }
}
?>