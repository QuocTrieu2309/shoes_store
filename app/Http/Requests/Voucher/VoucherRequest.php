<?php

namespace App\Http\Requests\Voucher;

use App\Models\Voucher;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Date;

class VoucherRequest extends FormRequest
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
                    'name' => 'required|unique:vouchers',
                    'start_time' => 'required|date_format:Y-m-d\TH:i',
                    'end_time' => [
                        'required',
                        'date_format:Y-m-d\TH:i',
                        'after_or_equal:start_time',
                        'after_or_equal:' . $currentDateTime,
                    ],
                    'quantity' => 'required|integer|min:1|max:100',
                    'type' => [
                        'required',
                        Rule::in([
                            Voucher::TYPE_BILL,
                            Voucher::TYPE_PRODUCT
                        ])
                    ],
                    'minimum_amount' => 'required|integer|min:1000',
                    'reduced_value' => [
                        'required',
                        'integer',
                        'min:1000',
                        function ($attribute, $value, $fail) {
                            $minimumAmount = $this->input('minimum_amount');
                            if ($value >= $minimumAmount) {
                                $fail('Gia tri giam gia phai nho hon gia tri toi thieu.');
                            }
                        },
                    ],
                ];
                break;
            case 'PUT':
                $rule = [
                    'name' => 'required|unique:vouchers,name,' . $this->id,
                    'start_time' => 'required|date_format:Y-m-d\TH:i',
                    'end_time' => [
                        'required',
                        'date_format:Y-m-d\TH:i',
                        'after_or_equal:start_time',
                        'after_or_equal:' . $currentDateTime,
                    ],
                    'quantity' => 'required|integer|min:1|max:100',
                    'type' => [
                        'required',
                        Rule::in([
                            Voucher::TYPE_BILL,
                            Voucher::TYPE_PRODUCT
                        ])
                    ],
                    'minimum_amount' => 'required|integer|min:1000',
                    'reduced_value' => [
                        'required',
                        'integer',
                        'min:1000',
                        function ($attribute, $value, $fail) {
                            $minimumAmount = $this->input('minimum_amount');
                            if ($value >= $minimumAmount) {
                                $fail('Gia tri giam gia phai nho hon gia tri toi thieu.');
                            }
                        },
                    ],
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
            'integer' => ':attribute phải là số nguyên',
            'min' => ':attribute nhỏ nhất là :min',
            'max' => ':attribute lớn nhất là :max'
        ];
    }
    public function attributes()
    {
        return [
            'name' => 'Tên voucher',
            'start_time' => 'Thời gian bắt đầu',
            'end_time' => 'Thời gian kết thúc',
            'quantity' => 'Số lượng',
            'type' => 'Loại Voucher',
            'reduced_value' => 'Giá trị giảm giá',
            'minimum_amount'=> 'Giá trị tối thiểu'
        ];
    }
}
