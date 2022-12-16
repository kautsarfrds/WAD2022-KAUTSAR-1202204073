<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $cars=product::orderBy('id')->get();
        return view('ListCarKautsar', ['cars'=> $cars]);
    }

    public function create()
    {
        return view('AddKautsar');
    }

    public function store(Request $table) 
    {   
        $imgName = $table->img_path->getClientOriginalName() . '-' . time() 
                    . '.' . $table->img_path->extension();
        $table->img_path->move(public_path('image'), $imgName);
        product::create([
            'user_id'       => $table   ->user_id,
            'name'          => $table   -> nama_mobil,
            'owner'         => $table   -> pemilik_mobil,
            'brand'         => $table   -> merk_mobil,
            'purchase_date' => $table   -> tanggal_beli,
            'description'   => $table   -> deskripsi,
            'image'         => $imgName, 
            'status'        => $table   -> status_pembayaran,
        ]);
        return redirect('/product');
    }
    public function show($id) 
    {
        $car = product::find($id);
        return view('DetailKautsar', ['car'=> $car]);
    }

    public function edit($id) 
    {
        $car = product::find($id);
        return view('EditKautsar', ['car'=> $car]);

    }
    public function update(Request $table, $id)
    {
        $car = product::find($id);
        $imgName = $car->img_path;
        if ($table->img_path) {
            $imgName = $table->img_path->getClientOriginalName() . '-' . time() 
                        . '.' . $table->img_path->extension();
            $table->img_path->move(public_path('image'), $imgName);
        }

        product::find($id)->update([
            'user_id'       => $table   ->user_id,
            'name'          => $table   -> nama_mobil,
            'owner'         => $table   -> pemilik_mobil,
            'brand'         => $table   -> merk_mobil,
            'purchase_date' => $table   -> tanggal_beli,
            'description'   => $table   -> deskripsi,
            'image'         => $imgName,
            'status'        => $table   -> status,
        ]);
        return redirect('/product');
    }

    public function destroy($id)
    {
        product::find($id)->delete();
        return redirect('/');  
    }



}