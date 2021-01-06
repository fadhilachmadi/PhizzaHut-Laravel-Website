<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use Auth;
use App\TransactionDetail;

class TransactionController extends Controller
{
    //
    public function __construct(){
        $this->middleware('memberOnly');
    }

    /**
     *    Function ini akan bekerja untuk menampilkan data transaksi yang pernah dilakukan
     *    oleh user. Function ini akan menampung semua data dari database table transactions
     *    yang memiliki user_id yang sama dengan id user yang saat itu sedang login.
     *    Nantinya, hasil tampung akan dikirim ke view history.blade.php 
     *    (yang terdapat dalam folder transaction)
     */

    public function index(){
        $transactions = Transaction::where('user_id', Auth::user()->id)->get();
        return view ('transaction.history', compact('transactions'));
    }

    public function detail($id){
        $transaction_details = TransactionDetail::where('transaction_id', $id)->get();       
        return view ('transaction.detail', compact('transaction_details'));
    }
}
