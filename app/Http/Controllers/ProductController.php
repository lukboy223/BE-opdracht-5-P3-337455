<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Illuminate\Log\log;

class ProductController extends Controller
{
    function index(Request $request)
    {
        $dateFrom = $request->input('dateFrom');
        $dateTo = $request->input('dateTo');

        if ($dateFrom == null) {
            $dateFrom = "1900-01-01";
        }
        if ($dateTo == null) {
            $dateTo = "2100-01-01";
        }
        try {
            $products = DB::select('call sp_read_products_per_period(?, ?)', [$dateFrom, $dateTo]);

            return view('producten.index', ['products' => $products]);

        } catch (\Exception $e) {
            return redirect()->route('home')->with('error', 'Er is iets fout gegaan');
            log($e->getMessage());
        }

        return view('producten.index');
    }
}
