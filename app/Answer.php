<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = ['question_id', 'body'];

    public static function getAll($id){
    	$model = Answer::where('question_id',$id)->get();

    	return $model;
    }
}
