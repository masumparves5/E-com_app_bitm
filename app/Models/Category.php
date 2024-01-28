<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function League\Flysystem\Local\move;

class Category extends Model
{
    use HasFactory;
    private static $category, $image, $imageName, $imageUrl, $directory, $extension;

    public static function newCategory($request)
    {
        self::$image        =$request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = time().'.'.self::$extension;
        self::$directory = 'upload/category-image/';
        self::$image->move(self::$directory,self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;

        self::$category = new Category();
        self::$category->name           = $request->name;
        self::$category->description    = $request->description;
        self::$category->image          = self::$imageUrl;
        self::$category->status         = $request->status;
        self::$category->save();
    }

}
