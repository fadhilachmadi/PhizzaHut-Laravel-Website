<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pizza;
use Auth;

class PizzaController extends Controller
{

    /**
     * Function ini akan berjalan ketika admin ingin menambahkan pizza baru
     * ke dalam daftar pizza. Function akan menampung data yang dibuat oleh admin,
     * lalu function akan membuat data pizza baru ke dalam database table pizza
     * dengan memasukkan data dari admin untuk disimpan ke dalam column dalam table 
     * pizza
     */
    public function addPizza(Request $request){

        Pizza::create([
            'name' => $request->pizzaName,
            'desc' => $request->pizzaDesc,
            'image' => $request->file('image')->getClientOriginalName(),
            'price' => $request->pizzaPrice,
        ]);

        $image = $request->file('image');
        $fileName = $request->file('image')->getClientOriginalName();

        $image->move(public_path('/image'), $fileName);

        return redirect('/admin');
    }

    public function updatePizza(Request $request, $pizza_id){

        $pizza = Pizza::findOrFail($pizza_id);


        if ($request->image == null){
            $pizza_photo = $pizza->image;
        }
        else{
            $imageOriginName = $request->image->getClientOriginalName();
            $imageFullName = $imageOriginName . '-' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('image'), $imageFullName);
            $pizza_photo = $imageFullName;
        }
        

        $pizza = Pizza::findOrFail($pizza_id)->update([
            'name' => $request->pizzaName,
            'desc' => $request->pizzaDesc,
            'price' => $request->pizzaPrice,
            'image' => $pizza_photo,
            
        ]);
        


        return redirect('/admin');
    }
    

    /**
     *     Function ini akan terpanggil apabila admin sudah menghapus tombol 'Delete' 
     * untuk menghapus pizza. Tahap pertama adalah melakukan pencarian pizza dengan id
     * yang sudah diberikan kepada function ini. Setelah itu, pizza dengan id tersebut
     * akan dihapus dengan menggunakan delete
     */
    public function deletePizza($pizza_id){
        $pizza = Pizza::where('id', $pizza_id)->first();
        $pizza->delete();
        return redirect()->route('adminHome');
    }
}
