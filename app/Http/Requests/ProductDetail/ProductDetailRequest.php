<?php

namespace App\Http\Requests\ProductDetail;

use Illuminate\Foundation\Http\FormRequest;

class ProductDetailRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rule = [];
        switch($this->method()){
            case 'POST':
                $rule = [
                   'size_id'=>'required',
                   'color_id'=>'required',
                   'image_id'=>'required|image|max:2048',
                   'sku'=>'required',
                   'quantity'=>'required|numeric|integer|min:1|max:1000',
                   'price'=>'required|numeric|min:10000|max:20000000',
                ];
                break;
            case 'PUT':
                $rule = [
                    'image_id'=>'required|image|max:2048',
                    'sku'=>'required',
                    'quantity'=>'required|numeric|integer|min:1|max:1000',
                    'price'=>'required|numeric|min:10000|max:20000000',
                 ];
                break;

        }
        return $rule;
    }
    public function messages()
    {
        return [
            'required'=>':attribute không được để trống',
            'image'=>':attribute phải là ảnh',
            'numeric'=>':attribute phải là số',
            'integer'=>':attribute phải là số nguyên',
            'min'=>':attribute tối thiểu là :min',
            'max'=>':attribute tối đa là :max',
        ];
    }
    public function attributes()
    {
        return [
            'image_id'=>'Ảnh sản phẩm',
            'size_id'=>'Size sản phẩm',
            'color_id'=>'Color sản phẩm',
            'sku'=>'Mã sản phẩm',
            'quantity'=>'Số lượng sản phẩm',
            'price'=>'Giá sản phẩm',
        ];
    }
}
