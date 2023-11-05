<?php

namespace App\Http\Controllers;

use App\Models\ProductInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function create()
    {
        return view('backend.products.create');
    }

    public function store(Request $request)
    {
        //QueryBuilder
//        DB::table('product_infos')->insert([
//            'name'          => $request->name,
//            'category_name' => $request->category_name,
//            'price'         => $request->price,
//            'description'   => $request->description,
//            'image'         => $request->image,
//            'status'        => $request->status,
//        ]);
        //ORM
        ProductInfo::storeProduct($request);

        return back()->with('success', 'Product created successfully.');
    }
}
