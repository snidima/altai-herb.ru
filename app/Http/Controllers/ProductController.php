<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Product;
use App\Category;

class ProductController extends Controller
{
    public function main( Product $products, Category $category  )
    {
        return view('shop', [
            'products' => $products->getAllProducts(),
            'categories' => $category->getAllCategorys()
        ]);
    }

    public function applyCategory( $id , Product $product, Category $category ){

        return view('shop', [
            'products' => $product->getInCategory( $id ),
            'categories' => $category->getAllCategorys()
        ]);
    }


}
