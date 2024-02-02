<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class ProductRequest extends FormRequest
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
                   'name'=>'required|unique:products',
                   'brand_id'=>'required',
                   'category_id'=>'required',
                   'material_id'=>'required',
                   'size_id'=>'required',
                   'color_id'=>'required',
                ];
                break;
            case 'PUT':
                $rule = [
                    'name'=>'required|unique:products,name,'.$this->id,
                    'brand_id'=>'required',
                    'category_id'=>'required',
                    'material_id'=>'required',
                 ];
                break;

        }
        return $rule;
    }
    public function messages()
    {
        return [
            'required'=>':attribute không được để trống',
            'unique'=>':attribute đã tồn tại'
        ];
    }
    public function attributes()
    {
        return [
            'name'=>'Tên sản phẩm',
            'brand_id'=>'Thương hiệu',
            'category_id'=>'Loại',
            'material_id'=>'Chất liệu',
            'size_id'=>'Kích thước',
            'color_id'=>'Màu sắc',
        ];
    }
}
