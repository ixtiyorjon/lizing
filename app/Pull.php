<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pull extends Model
{
    protected $fillable = ['pull'];

    public static function pull($pull=null){
    	$find = Pull::where('pull',$pull)->get();
    	$all = Pull::all();

    	return round(count($find)*100/count($all),1);
    }
    public static function pullSoni($pull=null){
    	$find = Pull::where('pull',$pull)->get();

    	return count($find);
    }
    public static function pullAll(){
    	$all = Pull::all();

    	return count($all);
    }
}
