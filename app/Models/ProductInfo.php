<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductInfo extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category_name', 'price', 'description', 'image', 'status'];

    protected static $productInfo, $imageFile, $imageName, $imageDirectory, $imageUrl;

    public static function storeProduct($request)
    {
        self::$imageFile = $request->file('image');
        self::$imageName = self::$imageFile->getClientOriginalName();
        self::$imageDirectory = 'admin/upload-files/products/';
        self::$imageFile->move(self::$imageDirectory, self::$imageName);

        self::$imageUrl = self::$imageDirectory.self::$imageName;

        self::$productInfo                    = new ProductInfo();
        self::$productInfo->name              = $request->name;
        self::$productInfo->category_name     = $request->category_name;
        self::$productInfo->price             = $request->price;
        self::$productInfo->description       = $request->description;
        self::$productInfo->image             = self::$imageUrl;
        self::$productInfo->status            = $request->status;
        self::$productInfo->save();

//        ProductInfo::create([
//            'name'              => $request->name,
//            'category_name'     => $request->category_name,
//            'price'             => $request->price,
//            'description'       => $request->description,
//            'image'             => $request->image,
//            'status'            => $request->status,
//        ]);

//        ProductInfo::create($request->all());

    }


}
