<?php

namespace CarListing\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FieldRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
        'item_name' => 'bail|required|max:255',
         'sku_no' => 'required|alpha_num',
         'price' => 'required|numeric',
        ];
    }

     public function messages()
    {
        return [
            'item_name.required' => 'An Item Name is required',
            'sku_no.required'  => 'An SKU NO is required',
            'price.required'  => 'The price is required',
        ];
    }
}
