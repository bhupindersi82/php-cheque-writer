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
        $amount = $request['automation-amount'];
        $numberToWords = new NumberToWords();

        // build a new number transformer using the RFC 3066 language identifier
        $numberTransformer = $numberToWords->getNumberTransformer('en');
        $words = strtolower($numberTransformer->toWords($amount));
        $words = str_replace('-',' ',$words);
        return view('cheque',['amount' => $amount, 'words' => $words]);
    }
}
