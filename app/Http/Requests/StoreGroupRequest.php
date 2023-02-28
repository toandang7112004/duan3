<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGroupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:groups',
        ];
    }
    public function messages()
    {
        return 
        [
            'name.required' => 'Vui lòng nhập tên quyền!',
            'name.unique' => 'Tên quyền đã tồn tại',
        ];
    }
}