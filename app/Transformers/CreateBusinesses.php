<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Http\Requests\CreateBusinessesRequest;

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
