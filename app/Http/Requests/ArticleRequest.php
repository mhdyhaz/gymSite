<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class ArticleRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title'            => ['required', 'string', 'min:3', 'max:255'],
            'slug'             => ['nullable', 'string', 'max:255', 'unique:articles,slug'],
            'body'             => ['required', 'string', 'min:50'],
            'meta_description' => ['nullable', 'string', 'max:160'],
            'thumbnail'        => ['nullable', 'image', 'max:2048'],
        ];
    }

    // میسازهtitle اگر اسلاگ ندهی از  
    protected function prepareForValidation()
    {
        if (!$this->slug && $this->title) {
            $this->merge([
                'slug' => Str::slug($this->title, '-')
            ]);
        }
    }
}
