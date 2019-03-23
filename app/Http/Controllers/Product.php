<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Product extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home()
    {
        $result = DB::table('products')
            ->get();
        return view('/welcome')->with('products', $result);
    }

    public function show($product)
    {
        $result = DB::table('products')
        ->where ('name', [$product])
        ->get();
        if($result->isEmpty()){
            return redirect('/');
        }
        else {
            return view('/product')->with('product', $result);
        }
    }

}
