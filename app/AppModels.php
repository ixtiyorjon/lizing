<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class AppModels extends Model
{
    use Translatable;
    // protected $translatable = ['title', 'body'];

    public static function valuta(){
        
    $url = "http://cbu.uz/ru/arkhiv-kursov-valyut/json/";
    $ch = curl_init();
    $timeout = 0;

    curl_setopt ($ch, CURLOPT_URL, $url);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    $valuta = curl_exec($ch);

    curl_close($ch);

    preg_match("/<span class=bld>(.*)<\/span>/", $valuta,  $converted);
    $converted = preg_replace("/[^0-9.]/", "", $converted);
// dd($valuta);
    $valuta = json_decode($valuta, true); 
        $valyuta = [
            1 => [
                    'summ' => $valuta[0]['Rate'],
                    'Ccy' => $valuta[0]['Ccy'],
                    'Diff' => $valuta[0]['Diff'],
                    'Date' => $valuta[0]['Date']
                    ],
            2 => [
                    'summ' => $valuta[1]['Rate'],
                    'Ccy' => $valuta[1]['Ccy'],
                    'Diff' => $valuta[1]['Diff'],
                    'Date' => $valuta[1]['Date'],

                    ],
            3 => [
                    'summ' => $valuta[2]['Rate'],
                    'Ccy' => $valuta[2]['Ccy'],
                    'Diff' => $valuta[2]['Diff'],
                    'Date' => $valuta[2]['Date'],

                    ],
            4 => [
                    'summ' => $valuta[4]['Rate'],
                    'Ccy' => $valuta[4]['Ccy'],
                    'Diff' => $valuta[4]['Diff'],
                    'Date' => $valuta[4]['Date'],

                    ],
            5 => [
                    'summ' => $valuta[13]['Rate'],
                    'Ccy' => $valuta[13]['Ccy'],
                    'Diff' => $valuta[13]['Diff'],
                    'Date' => $valuta[13]['Date'],

                    ],
            6 => [
                    'summ' => $valuta[3]['Rate'],
                    'Ccy' => $valuta[3]['Ccy'],
                    'Diff' => $valuta[3]['Diff'],
                    'Date' => $valuta[3]['Date'],

                    ]
        ];
        return $valyuta;
    }
}

?>