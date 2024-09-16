<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProduct(){
        // Danh sách sản phẩm 
        $listProducts = [
            [
            'id'=> '1',
            'name'=> 'Iphone 14'
        ],
        [
            'id'=> '2',
            'name'=> 'Iphone 15'
        ]
        ];
        return view('list-product',compact('listProducts'));
    }
    public function getProduct($id, $name = ''){
        echo $id;
        echo $name;
    }
    public function updateProuduct(Request $request){
        echo $request->id;
        echo $request->name;

    }
}
