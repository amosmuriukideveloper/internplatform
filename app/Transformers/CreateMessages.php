<?php

use League\Fractal\TransformerAbstract;
use App\Transformers\CreateMessagesRequest;

class CreateMessagesRequestTransformer extends TransformerAbstract
{
    /**
     * Transform the UpdateMessagesRequest instance.
     *
     * @param CreateMessagesRequest $request
     * @return array
     */
    public function transform(CreateMessagesRequest $request)
    {
        return [
            'sender_id' => (int) $request->input('sender_id'),
            'receiver_id' => (int) $request->input('receiver_id'),
            'message' => $request->input('message'),
            'is_read' => (bool) $request->input('is_read'),
        ];
    }
}

