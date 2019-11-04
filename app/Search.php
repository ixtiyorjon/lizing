<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Search extends Model
{
    public static function getAll($q){
    	// $news = \App\News::select('id','title','body','image')
     //    ->whereTranslation('title','LIKE',"%{$q}%")
     //    ->orWhere('body', 'LIKE', "%{$q}%")
     //    // ->get()
     //    ;
     //    $news['link'] = 'news';
        // ->paginate(1);
        $model = \App\Texnic::select('id','name','image','slug')
        ->whereTranslation('name','LIKE',"%{$q}%")
        // ->unionAll($news)
        ->paginate(20)
        // ->get()
        ;
        return $model;
        // dd($model);
    }
}
