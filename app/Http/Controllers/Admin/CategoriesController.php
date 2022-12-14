<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Repositories\CategoryRepository;
use DebugBar\DebugBar;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = CategoryRepository::getCategories();
        $hierarchy  = CategoryRepository::getCategoriesOrderedByHierarchy();

        return view('admin.pages.categories.index', compact('categories', 'hierarchy'));
    }

    public function store(CategoryRequest $request)
    {
        $data = $request->validated();

        try {
            if (CategoryRepository::createCategory($data)) {
                return redirect()->route('admin.categories.index')->with('success', __('admin.pages.categories.alerts.created'));
            } else {
                return redirect()->route('admin.categories.index')->withErrors(__('admin.pages.categories.alerts.error'));
            }
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(__('global.alerts.errored'));
        }
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $data = $request->validated();

        try {
            if (CategoryRepository::updateCategory($category->id, $data)) {
                return redirect()->route('admin.categories.index')->with('success', __('admin.pages.categories.alerts.updated'));
            } else {
                return redirect()->route('admin.categories.index')->withErrors(__('admin.pages.categories.alerts.error'));
            }
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(__('global.alerts.errored'));
        }
    }

    public function destroy(Category $category)
    {
        try {
            if (CategoryRepository::deleteCategory($category)) {
                return redirect()->route('admin.categories.index')->with('success', __('admin.pages.categories.alerts.deleted'));
            } else {
                return redirect()->route('admin.categories.index')->withErrors(__('admin.pages.categories.alerts.error'));
            }
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(__('global.alerts.errored'));
        }
    }
}
