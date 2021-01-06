<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;
use App\User;
use Auth;
use Route;
use App\Transaction;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function redirectToHome(){

        if (Route::has('register')){
            $role_id = 0;
        }
        else{
            $role_id = Auth::user()->role_id;
        }

        dd($role_id);
        if ($role_id == 1){
             return redirect ('/admin');
        }
        else{
            return redirect ('/');
        }
    }


    /**     Function ini dipanggil ketika admin ingin mengupdate sebua pizza.
     * Function ini akan mencari pizza dalam database dengan id yang sama
     * dengan id yang tersedia pada function ini. Setelah itu, hasil pencarian
     * akan dioper ke view edit.blade.php (pada folder pizza) untuk ditampilkan
     * detail dari pizza tersebut yang nantinya dapat diubah oleh admin
     * */ 
    public function showUpdatePizza($pizza_id){
        $pizza = Pizza::where('id', $pizza_id)->first();
        return view('pizza.edit', compact('pizza'));
    }

    public function showDeletePizza($pizza_id){
        $pizza = Pizza::where('id', $pizza_id)->first();
        return view('pizza.delete', compact('pizza'));
    }

    public function showAddPizza(){
        return view('pizza.add');
    }

    public function viewAllUserTransaction(){
        $transactions = Transaction::join('users', 'transactions.user_id', '=', 'users.id')->get();
        return view('admin.transaction', ['transactions' => $transactions]);
    }


    /**
     * Function ini dipanggil ketika Admin ingin melihat seluruh user yang sudah
     * terdaftar dalam website Phizza Hut. Function ini akan memanggil model User
     * untuk mengambil semua data pada table users dalam database. Setelah itu, 
     * akan dioper ke dalam view admin.user.blade.php
     */
    public function viewAllUser(){
        $user = User::all();
        return view('admin.user', ['user' => $user]);
    }

    public function admin(Request $request){
        $pizzas = Pizza::where('name', 'LIKE', '%'.$request->search.'%')->paginate(6);
        
        return view('home.admin', compact('pizzas'));
    }

    public function member(Request $request){

        $pizzas = Pizza::where('name', 'LIKE', '%'.$request->search.'%')->paginate(6);
        
        return view('home.member', compact('pizzas'));
    }


    /**
     *     Function ini dipanggil ketika user ingin meilhat detail dari pizza
     * yang dipilih di Home Page. Function ini akan memanggil model Pizza
     * untuk mengambil data pada table pizza  dalam database dengan id yang sama
     * dengan yang terdapat pada function ini. Setelah itu, hasil dari pencarian data 
     * di database akan dioper ke dalam view pizza.detail_pizza.blade.php
     */
    public function detailPizza($id){
        $pizza = Pizza::findOrFail($id);
        return view('pizza.detail_pizza', compact('pizza'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

}
