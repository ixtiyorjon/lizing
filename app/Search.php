<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Search extends Model
{
    public static function getAll($q){
    	$news = \App\News::select('id','title','body','image')
        ->whereTranslation('title','LIKE',"%{$q}%")
        ->orWhere('body', 'LIKE', "%{$q}%")
        // ->get()
        ;
        // ->paginate(1);
        $model = \App\Slider::select('id','title','body','image')
        ->whereTranslation('title','LIKE',"%{$q}%")
        ->orWhere('body', 'LIKE', "%{$q}%")
        ->unionAll($news)
        ->paginate(10)
        // ->get()
        ;
        return $model;
        // dd($model);
    }
}
