<?php

namespace App\Http\Requests\Teacher;

use App\Http\Requests\BaseRequest;

class UpdateTeacherRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     * @return array
     */
    public function rules(): array
    {
        return [
            'username'  => 'required|string',
            'full_name' => 'required|string',
            'email'     => 'required|string|email'
        ];
    }
}
