<?php

use League\Fractal\TransformerAbstract;
use App\Http\Requests\UpdateMessagesRequest;


class UpdateMessagesRequestTransformer extends TransformerAbstract
{
    /**
     * Transform the UpdateMessagesRequest instance.
     *
     * @param UpdateMessagesRequest $request
     * @return array
     */
    public function transform(UpdateMessagesRequest $request)
    {
        return [
            'sender_id' => (int) $request->input('sender_id'),
            'receiver_id' => (int) $request->input('receiver_id'),
            'message' => $request->input('message'),
            'is_read' => (bool) $request->input('is_read'),
        ];
    }
}

