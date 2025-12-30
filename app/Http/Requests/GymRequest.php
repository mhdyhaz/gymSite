<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GymRequest extends FormRequest
{
  

    public function rules(): array
    {
        return [
            'name'        => ['required', 'string', 'max:255'],
            'slug'        => ['required', 'string', 'max:255', 'alpha_dash'],
            'description' => ['nullable', 'string'],
            'address'     => ['required', 'string', 'max:500'],
            'phone'       => ['nullable', 'string', 'max:20'],
            'status'      => ['required', 'in:active,inactive'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'    => 'نام باشگاه الزامی است',
            'slug.required'    => 'اسلاگ اجباری است',
            // alpha_dash =SEO بهترین انتخاب بدلیل 
            'slug.alpha_dash'  => 'اسلاگ فقط باید شامل حروف، عدد و خط تیره باشد',
            'address.required' => 'آدرس نمی‌تواند خالی باشد',
            'status.in'        => 'باشد active یا inactive وضعیت فقط ',
        ];
    }
}
