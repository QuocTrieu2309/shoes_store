<?php

namespace App\Http\Requests\Promotion;

use App\Models\Promotion;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Date;
use App\Models\Voucher;

class PromotionRequest extends FormRequest
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
        $currentDateTime = Date::now()->toDateTimeString();
        $rule = [];
        switch ($this->method()) {
            case 'POST':
                $rule = [
                    'name' => 'required|unique:promotions',
                    'start_time' => 'required|date_format:Y-m-d\TH:i',
                    'end_time' => [
                        'required',
                        'date_format:Y-m-d\TH:i',
                        'after_or_equal:start_time',
                        'after_or_equal:' . $currentDateTime,
                    ],
                    'type_promotion' => [
                        'required',
                        Rule::in([
                            Promotion::TYPE_PERCENT,
                            Promotion::TYPE_PRICE
                        ])
                    ],
                    'value' => [
                        'required',
                        'numeric',
                        'min:1',
                        function ($attribute, $value, $fail) {
                            $type = $this->input('type_promotion');
                            if ($type == Promotion::TYPE_PERCENT && $value >=100) {
                                $fail('Gia tri giam gia theo phan tram phai nho hon 100%.');
                            }elseif($type == Promotion::TYPE_PRICE && $value <1000){
                                $fail('Gia tri giam gia theo dong gia phai lon hon 1000.');
                            }
                        },
                    ],
                    'description' => "max:100",
                ];
                break;
            case 'PUT':
                $rule = [
                    'name' => 'required|unique:promotions,name,' . $this->id,
                    'start_time' => 'required|date_format:Y-m-d\TH:i',
                    'end_time' => [
                        'required',
                        'date_format:Y-m-d\TH:i',
                        'after_or_equal:start_time',
                        'after_or_equal:' . $currentDateTime,
                    ],
                    'type_promotion' => [
                        'required',
                        Rule::in([
                            Promotion::TYPE_PERCENT,
                            Promotion::TYPE_PRICE
                        ])
                    ],
                    'value' => [
                        'required',
                        'numeric',
                        'min:1',
                        function ($attribute, $value, $fail) {
                            $type = $this->input('type_promotion');
                            if ($type == Promotion::TYPE_PERCENT && $value >=100) {
                                $fail('Gia tri giam gia theo phan tram phai nho hon 100%.');
                            }
                            // elseif($type == Promotion::TYPE_PRICE && $value <1000){
                            //     $fail('Gia tri giam gia theo dong gia phai lon hon 1000.');
                            // }
                        },
                    ],
                    'description'=>'max:60'
                    ,
                ];
                break;
        }
        return $rule;
    }
    public function messages()
    {
        return [
            'required' => ':attribute không được để trống',
            'unique' => ':attribute đã tồn tại',
            'date_format' => ':attribute phải đúng định dạng',
            'after_or_equal'=> ':attribute phải bằng hoặc sau thời gian bắt đầu va thoi gian hien tai',
            'numeric' => ':attribute phải là số ',
            'min' => ':attribute nhỏ nhất là :min',
            'max' => ':attribute lớn nhất là :max'
        ];
    }
    public function attributes()
    {
        return [
            'name' => 'Tên giảm giá',
            'start_time' => 'Thời gian bắt đầu',
            'end_time' => 'Thời gian kết thúc',
            'type_promotion' => 'Loại giảm giá',
            'value' => 'Giá trị giảm giá',
            'description'=> 'Mô tả'
        ];
    }
}
