<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
         public function index()
{
$viewData = [];
$viewData["title"] = "Products - Zay shop";

// $viewData["products"] = ProductController::$products;
$viewData["products"] = Product::all();
return view('product.index')->with("viewData", $viewData);
}
public function show($id)
{
// $viewData = [];
// // $product = ProductController::$products[$id - 1];
// $product = Product::findOrFail($id);
// $viewData["title"] = $product["name"] . " - shop Zay";
// // $viewData["subtitle"] = $product["name"] . " - Product information";

// $viewData["product"] = $product;
// return view('product.show')->with("viewData", $viewData);
$viewData = [];
$product = Product::findOrFail($id);
// $viewData["title"] = $product["name"]." - Online Store";
// $viewData["subtitle"] = $product["name"]." - Product information";
$viewData["title"] = $product->getName() . " - Zay shop";
$viewData["subtitle"] = $product->getName() . " - Product information";
$viewData["product"] = $product;
return view('product.show')->with("viewData", $viewData);
}
}
