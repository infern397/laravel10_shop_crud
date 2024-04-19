<?php

namespace App\Http\Requests\Order\Product;

use App\Models\Product;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class AddProductRequest extends FormRequest
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
            'quantity' => 'integer|required',
            'product' => 'integer|exists:products,id'
        ];
    }

    public function withValidator (Validator $validator)
    {
        $validator->after(function ($validator) {
            $product = Product::find($this->product);
            if ($this->quantity > $product->stock) {
                $validator->errors()->add('quantity_' . $this->product, 'Quantity exceeds stock');
            }
        });
    }

}
