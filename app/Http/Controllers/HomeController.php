<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use NumberToWords\NumberToWords;

class HomeController extends Controller
{
    //
    function list()
    {
        return view('home');
    }

    function cheque(Request $request)
    {
        $n = $request['automation-amount'];
        $amount = floor($n);
        $decimal = number_format($n-$amount,2);
        $numberToWords = new NumberToWords();

        // build a new number transformer using the RFC 3066 language identifier
        $numberTransformer = $numberToWords->getNumberTransformer('en');
        $words = strtolower($numberTransformer->toWords($amount));
        $words = ucwords(str_replace('-',' ',$words));

        if($decimal > 0){
            $decimal = substr((string)$decimal,2);

            $words .= " Point";
            foreach (str_split($decimal) as $d) {
                $words .= ' ' . ucwords(strtolower($numberTransformer->toWords($d)));
            }
        }
        

        return view('cheque',['amount' => $n, 'words' => $words]);
    }
}
