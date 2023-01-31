<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use League\Fractal\TransformerAbstract;

class CreateBusinessesRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|string|email|unique:businesses',
            'password' => 'required|string',
            'location' => 'required|string',
            'industry' => 'required|string',
            'website' => 'nullable|string',
            'is_active' => 'nullable|boolean',
        ];
    }
}

class CreateBusinessesRequestTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @param CreateBusinessesRequest $request
     * @return array
     */
    public function transform(CreateBusinessesRequest $request)
    {
        return [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'location' => $request->input('location'),
            'industry' => $request->input('industry'),
            'website' => $request->input('website', ''),
            'is_active' => $request->input('is_active', true),
        ];
    }
}


