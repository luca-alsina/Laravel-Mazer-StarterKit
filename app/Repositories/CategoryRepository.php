<?php

namespace App\Repositories;

use App\Models\Category;

class CategoryRepository
{

    public static function getCategories(): \Illuminate\Database\Eloquent\Collection
    {
        return Category::all();
    }

    public static function getCategory($id) : mixed
    {
        return Category::find($id);
    }

    public static function createCategory($data): Category
    {
        return Category::create($data);
    }

    public static function updateCategory($id, $data): bool
    {
        return self::getCategory($id)->update($data);
    }

    public static function deleteCategory($id): bool
    {
        return self::getCategory($id)->delete();
    }

    // TODO : Add getCategoriesByParentId($id), getCategoriesBySlug($slug)
    // TODO : getCategoriesWithNoParent(), getCategoriesWithParent(), getCategoriesWithNoChildren(), getCategoriesWithChildren()
    // TODO : getCategoriesWithChildrenAndParent(), getCategoriesWithChildrenAndNoParent(), getCategoriesWithNoChildrenAndParent(), getCategoriesWithNoChildrenAndNoParent(), getCategoriesWithChildrenAndParentAndNoChildren()


}
