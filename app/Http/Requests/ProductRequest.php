<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
        return [
            'title' => ['required', 'max:16'],
            'description' => ['required', 'max:255'],
            'price' => ['required', 'integer'],
            'product_image' => ['required', 'file'],
        ];
    }
    public function messages(): array
    {
        return [
            'title.required' => 'Названия товара обязательно!!!',
            'title.max' => 'Название товара не должно привышать 16 символов!!!',

            'description.required' => 'Описание товара обязательно!!!',
            'description.max' => 'Описание товара не должно привышать 255 символов!!!',

            'price.required' => 'Цена товара обязательна!!!',
            'price.integer' => 'Цена должна быть числом',

            'product_image.required' => 'Картинка обязательна!!!',
            'product_image.file' => 'Картинка должна быть файлом!1',
        ];
    }
}
