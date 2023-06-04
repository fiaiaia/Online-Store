<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /*public static $products = [
        ['id' => '1', 'name' => 'COLORROSE Pallete', 'description' => 'Powdery soft waxy high texture, easy to smudge gradient eye makeup', 'image' => 'pallete.png', 'price' => '125.000'], 
        ['id' => '2', 'name' => 'COLORROSE Lipstik', 'description' => 'Western Antique Lace Lipstick matte lipstick', 'image' => 'lipstik.png', 'price' => '80.000'],
        ['id' => '3', 'name' => 'COLORROSE Eyeshadow', 'description' => 'Center sparkle part of the relief pattern', 'image' => 'eyeshadow.png', 'price' => '65.000'],
        ['id' => '4', 'name' => 'COLORROSE Blush', 'description' => 'Apply on cheeks with a gorgeous and gentle impression', 'image' => 'blush.png', 'price' => '55.000']];
    */
    public function index()
    {
        $viewData = [];
        $viewData['title'] = 'Products - Online Store';
        $viewData['subtitle'] = 'List of products';
        $viewData["products"] = Product::all();
        return view('product.index')->with('viewData', $viewData);
    }

    public function show($id)
    {
        $viewData = [];
        $product = Product::findOrFail($id);
        $viewData["title"] = $product->getName()." - Online Store";
        $viewData["subtitle"] = $product->getName()." - Product information";
        $viewData['product'] = $product;
        return view('product.show')->with('viewData', $viewData);
    }
}
