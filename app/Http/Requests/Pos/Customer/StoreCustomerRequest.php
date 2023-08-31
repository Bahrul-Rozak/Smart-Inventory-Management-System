<?php

namespace App\Http\Requests\Pos\Customer;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequest extends FormRequest
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
            'email' => ['required', 'email', 'unique:customers,email'],
            'address' => ['required', 'string', 'max:255'],
            'customer_image' => ['required', 'mimes:png,jpg,jpeg'],
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
