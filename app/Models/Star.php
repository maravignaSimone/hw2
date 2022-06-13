<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Star extends Model{

        public $timestamps = false;

        public function users(){
            return $this->belongsTo('App\Models\User');
        }

        public function recipes(){
            return $this->belongsTo('App\Models\Recipe');
        }
    }
?>