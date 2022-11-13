<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Repositories\CategoryRepository;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = ProductRepository::getProducts();
        $categories = CategoryRepository::getCategories();

        return view('products.index', compact('products', 'categories'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show(Product $product)
    {
    }

    public function edit(Product $product)
    {
    }

    public function update(Request $request, Product $product)
    {
    }

    public function destroy(Product $product)
    {
    }
}
