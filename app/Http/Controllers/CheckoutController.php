<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Transaction;
use Auth;
use App\TransactionDetail;

class CheckoutController extends Controller
{
    //

    public function __construct(){
        $this->middleware('auth');
    }



    /**
     *     Function ini berguna untuk memasukkan semua pizza yang terdapat dalam Cart
     * ke dalam table Transaction dan Detail Transaction dalam database. Pertama, dengan
     * membuat data Transaction baru dengan memasukkan id dari user yang saat itu login
     * ke dalam column user_id. Setelah itu, akan dilakukan looping sebanyak
     * jumlah data dalam cart untuk dimasukkan ke dalam data Detail Transaction
     * yang baru
     */
    public function store(){

        $carts = Cart::where('user_id', Auth::user()->id);
        
        $cartUser = $carts->get();

        $transaction = Transaction::create([
            'user_id' => Auth::user()->id
        ]);

        
        foreach($cartUser as $cart){
            $transaction->detail()->create([
                'pizzas_id' => $cart->pizzas_id,
                'qty' => $cart->qty
            ]);
        }

        $carts->delete();
        return redirect('/');

        

    }
}
