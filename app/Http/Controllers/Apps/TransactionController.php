<?php

namespace App\Http\Controllers\Apps;

use Inertia\Inertia;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Transaction;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * index
     *
     * @return void
     */

     public function index(){
         //get cart
         $carts= Cart::with('product')->where('cashier_id',auth()->user()->id->latest()->get());

         //get all customers
         $customers= Customer::latest()->get();

         return Inertia::render('Apps/Transaction/Index',[
             'carts'        =>$carts,
             'carts_total'  =>$carts->sum('price'),
             'customers'    =>$customers
         ]);
     }

     /**
      * searchProduct
      * @param mixed $request
      * @return void
      */
}
