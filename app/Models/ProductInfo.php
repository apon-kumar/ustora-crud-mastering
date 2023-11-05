<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductInfo extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category_name', 'price', 'description', 'image', 'status'];

    protected static $productInfo;

    public static function storeProduct($request)
    {


        ProductInfo::create([
            'name'              => $request->name,
            'category_name'     => $request->category_name,
            'price'             => $request->price,
            'description'       => $request->description,
            'image'             => $request->image,
            'status'            => $request->status,
        ]);



    }


}
