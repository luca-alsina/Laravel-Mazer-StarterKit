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

    public static function getCategoriesByParentId($id): Collection
    {
        return Category::where('parent_id', $id)->get();
    }


    // TODO : getCategoriesWithNoParent(), getCategoriesWithParent(), getCategoriesWithNoChildren(), getCategoriesWithChildren()

    public static function getCategoriesWithNoParent(): Collection
    {
        return Category::where('parent_id', null)->get();
    }

    public static function getCategoriesWithParent(): Collection
    {
        return Category::where('parent_id', '!=', null)->get();
    }

    public static function getCategoriesWithNoChildren(): Collection
    {
        return Category::whereDoesntHave('children')->get();
    }

    public static function getCategoriesWithChildren(): Collection
    {
        return Category::whereHas('children')->get();
    }

    // TODO : getCategoriesWithChildrenAndParent(), getCategoriesWithChildrenAndNoParent(), getCategoriesWithNoChildrenAndParent(), getCategoriesWithNoChildrenAndNoParent(), getCategoriesWithChildrenAndParentAndNoChildren()

    public static function getCategoriesOrderedByHierarchy() : array
    {
        $categories = Category::all();

        $categories = $categories->map(function ($category) {
            return [
                'id' => $category->id,
                'title' => $category->title,
                'parent_id' => $category->parent_id,
                'slug' => $category->slug,
                'children' => $category->children,
            ];
        });

        $categories = $categories->toArray();

        $categories = self::orderCategoriesByHierarchy($categories);

        return $categories;
    }

    private static function orderCategoriesByHierarchy($categories, $parent_id = null): array
    {
        $result = [];

        foreach ($categories as $key => $category) {
            if ($category['parent_id'] == $parent_id) {
                $result[$category['id']] = $category;
                $result[$category['id']]['children'] = self::orderCategoriesByHierarchy($categories, $category['id']);
            }
        }

        return $result;
    }

}
