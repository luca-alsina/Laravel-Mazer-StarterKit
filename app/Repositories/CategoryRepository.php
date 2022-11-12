<?php

namespace App\Repositories;

use App\Models\Category;
use \Illuminate\Database\Eloquent\Collection;

class CategoryRepository
{

    public static function getCategories(): Collection
    {
        return Category::all();
    }

    public static function getCategory($id) : Category
    {
        return Category::find($id)->first();
    }

    public static function createCategory($data): Category
    {

        $category = Category::create($data);

        $category->parent_id = $data['parent_id'];

        $category->save();

        return $category;
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
