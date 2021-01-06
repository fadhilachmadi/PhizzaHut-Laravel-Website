<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;
use App\Cart;
use Auth;

class CartController extends Controller
{

    public function index(){
        $carts = Cart::where('user_id', Auth::user()->id)->get();
        
        
        return view ('cart.index', compact('carts'));
    }

    /**
     *     Function ini akan dijalankan apabila user ingin memasukkan pizza ke dalam cart
     *  Nantinya, function ini akan membuat data baru pada table carts dalam database
     * dengan memasukan user_id yang sedang login saat itu, pizzas_id dari pizza
     * yang dipilih saat itu, dan kuantitas yang diinginkan oleh user

     */
    public function add(Request $request){
        Cart:: create([
            'user_id' => Auth::user()->id,
            'pizzas_id' => $request->pizza_id,
            'qty' => $request->qty
        ]);

        return redirect('/');
    }

    /**
     *     Function ini akan dijalankan apabila user ingin mengubah kuantitas dari 
     * pizza yang terdapat dalam Cart User. Function akan mencari cart dengan id yang 
     * sama dengan yang id tersedia dalam function, lalu akan memasukkan data baru, 
     * sesuai dengan apa yang dimasukkan oleh user.
     */
    public function update(Request $request, $id){
                
        $cart = Cart::findOrFail($id)->update([
            'qty' => $request->qty
        ]);

        return back();
    }

    /**
     *     Function ini akan dijalankan ketika user ingin menghapus pizza yang terdapat
     * dalam cart. Function akan mencari cart yang memiliki id yang sama dengan id
     * yang tersedia dalam function, lalu akan menghapusnya dengan perintah destroy()
     */
    public function delete(Request $request, $id){
        $cart = Cart::findOrFail($id)->delete();
        Cart::destroy($id);
        return back();
    }

    

}
