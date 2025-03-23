<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Illuminate\Log\log;

class ProductController extends Controller
{
    function index($dateFrom = null, $dateTo = null) {

        if($dateFrom == null){
            $dateFrom = "1900-01-01";
        }
        if($dateTo == null){
            $dateTo = "2100-01-01";
        }
        try{
            $products = DB::select('call sp_read_products_per_period(?, ?)', array($dateFrom, $dateTo));
            return view('producten.index', ['products' => $products]);
            
        } catch (\Exception $e) {
            return view('welcome')->with('error', 'Er is iets fout gegaan');
            log($e->getMessage());
             }

        return view('producten.index');
    }
}
