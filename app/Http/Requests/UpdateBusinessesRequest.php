<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use League\Fractal\TransformerAbstract;

class UpdateBusinessesRequest extends FormRequest
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
            'name' => 'string|max:255',
            'email' => 'string|email|max:255|unique:businesses,email,' . $this->route('business')->id,
            'password' => 'string|min:8|confirmed',
            'location' => 'string|max:255',
            'industry' => 'string|max:255',
            'website' => 'string|max:255|nullable',
            'is_active' => 'boolean',
        ];
    }
}

class UpdateBusinessesRequestTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @param UpdateBusinessesRequest $request
     * @return array
     */
    public function transform(UpdateBusinessesRequest $request)
    {
        return [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'location' => $request->input('location'),
            'industry' => $request->input('industry'),
            'website' => $request->input('website'),
            'is_active' => $request->input('is_active'),
        ];
    }
}
