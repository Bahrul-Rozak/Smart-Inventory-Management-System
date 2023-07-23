<?php

namespace App\Http\Requests\Pos\Supplier;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSupplierRequest extends FormRequest
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
            'mobile_no' => ['required', 'min:9', 'max:15'],
            'email' => ['required', 'email', 'unique:suppliers,email,'.$this->id],
            'address' => ['required', 'string', 'max:255'],
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
            'name' => 'Name',
            'mobile_no' => 'Mobile Number',
            'email' => 'Email',
            'address' => 'Address',
        ];
    }
}
