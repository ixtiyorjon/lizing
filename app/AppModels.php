<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class AppModels extends Model
{
    use Translatable;
    // protected $translatable = ['title', 'body'];

    public static function valuta(){
       $valuta = file_get_contents('https://nbu.uz/uz/exchange-rates/json/');

        $valuta = json_decode($valuta, true); 
        $valyuta = [
            1 => [
                    'title' => $valuta[23]['title'],
                    'code' => $valuta[23]['code'],
                    'cb_price' => $valuta[23]['cb_price'],
                    'Date' => $valuta[23]['date']
                ],
            2 => [
                    'title' => $valuta[18]['title'],
                    'code' => $valuta[18]['code'],
                    'cb_price' => $valuta[18]['cb_price'],
                    'Date' => $valuta[18]['date']
                ],
            3 => [
                    'title' => $valuta[7]['title'],
                    'code' => $valuta[7]['code'],
                    'cb_price' => $valuta[7]['cb_price'],
                    'Date' => $valuta[7]['date']
                ],
            4 => [
                    'title' => $valuta[3]['title'],
                    'code' => $valuta[3]['code'],
                    'cb_price' => $valuta[3]['cb_price'],
                    'Date' => $valuta[3]['date']
                ],
            5 => [
                   'title' => $valuta[0]['title'],
                   'code' => $valuta[0]['code'],
                    'cb_price' => $valuta[0]['cb_price'],
                    'Date' => $valuta[0]['date']
                ],
            6 => [
                    'title' => $valuta[1]['title'],
                    'code' => $valuta[1]['code'],
                    'cb_price' => $valuta[1]['cb_price'],
                    'Date' => $valuta[1]['date']
                ],
            7 => [
                    'title' => $valuta[8]['title'],
                    'code' => $valuta[8]['code'],
                    'cb_price' => $valuta[8]['cb_price'],
                    'Date' => $valuta[8]['date']
                ],
        ];
        return $valyuta;
    }
}

?>