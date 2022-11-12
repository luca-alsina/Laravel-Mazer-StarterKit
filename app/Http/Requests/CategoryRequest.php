<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    public function rules(): array
    {
        return $this->isMethod('PUT') ? $this->updateRules() : $this->storeRules();
    }

    protected function storeRules(): array
    {
        return [
            'title'         => 'required|string|max:255',
            'slug'          => 'nullable|alpha_dash|max:255',
            'parent_id'     => 'nullable|integer|exists:categories,id',
            'description'   => 'nullable|string',
        ];
    }

    protected function updateRules(): array
    {
        return [
            'title'         => 'required|string|max:255',
            'slug'          => 'nullable|alpha_dash|max:255',
            'parent_id'     => 'nullable|integer|exists:categories,id',
            'description'   => 'nullable|string',
        ];
    }
}
