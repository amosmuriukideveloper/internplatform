<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Http\Requests\UpdateBusinessesRequest;

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

