<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['name','email','body','reading','status'];

    public static function getAll(){
    	$all = Question::get();

    	return count($all);
    }

    public static function active(){
    	$find = Question::where(['status'=>'active','reading'=>1])->get();

    	$all = Question::all();

    	return round(count($find)*100/count($all),1);
    }

    public static function number(){
    	$find = Question::where('status','active')->get();

    	$all = Question::all();

    	return count($find);
    }

    public static function answer(){
    	$quest = Question::all();

    	$soni = 0;
    	foreach($quest as $value){
    		if ( Answer::where(['question_id'=>$value->id])->first() ) {
    			$soni ++; 
    		}
    		else{
    			$soni=$soni;
    		}
    	}
    	return $soni;
    }
    public static function noAnswer(){
    	$quest = Question::all();

    	$soni = 0;
    	foreach($quest as $value){
    		if ( Answer::where(['question_id'=>$value->id])->first() ) {
    			$soni=$soni;
    		}
    		else{
    			$soni ++; 
    		}
    	}
    	return $soni;
    }

    public static function answerFoiz(){

    	return round(Question::answer()*100/Question::getAll());
    } 
    public static function noAnswerFoiz(){

    	return round(Question::noAnswer()*100/Question::getAll());
    } 
}
