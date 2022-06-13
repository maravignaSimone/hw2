<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Recipe extends Model{

        public $timestamps = false;

        public function stars(){
            return $this->hasMany('App\Models\Star');
        }
    }
?>