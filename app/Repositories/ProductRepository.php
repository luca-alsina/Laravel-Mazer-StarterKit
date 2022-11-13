<?php

namespace App\Repositories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

class ProductRepository
{

    public static function getProducts(): Collection
    {
        return Product::all();
    }

    public static function getProduct($id) : Product
    {
        return Product::find($id)->first();
    }

    public static function createProduct($data): Product
    {

        $product = Product::create($data);

        $product->category_id = $data['category_id'];

        $product->save();

        return $product;
    }

    public static function updateProduct($id, $data): bool
    {
        return self::getProduct($id)->update($data);
    }

    public static function deleteProduct($id): bool
    {
        return self::getProduct($id)->delete();
    }

    // TODO : Add getProductsByCategoryId($id), getProductsBySlug($slug)
    // TODO : getProductsWithNoCategory(), getProductsWithCategory(), getProductsWithNoChildren(), getProductsWithChildren()
    // TODO : getProductsWithChildrenAndCategory(), getProductsWithChildrenAndNoCategory(), getProductsWithNoChildrenAndCategory(), getProductsWithNoChildrenAndNoCategory(), getProductsWithChildrenAndCategoryAndNoChildren()


}
