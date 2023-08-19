<?php

namespace App\Http\Requests\Pos\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'supplier_id' => ['required', 'exists:suppliers,id'],
            'unit_id' => ['required', 'exists:units,id'],
            'category_id' => ['required', 'exists:categories,id'],
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes(): array
    {
        return [
            'name' => 'Product Name',
            'supplier_id' => 'Supplier Name',
            'unit_id' => 'Unit Name',
            'category_id' => 'Category Name',
        ];
    }
}
