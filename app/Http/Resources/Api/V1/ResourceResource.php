<?php

namespace App\Http\Resources\Api\V1;

use App\Constants\TaskStatusType;
use App\Models\TComment;
use Illuminate\Http\Resources\Json\JsonResource;

class ResourceResource extends JsonResource
{

    public function toArray($request): array
    {

        return [
            'pk_i_id' => $this->getKey(),
            's_title' => $this->s_title,
            's_path' => asset($this->s_filename),
            'e_type' => 'IMAGE',
            'b_related_to_comment' => ($this->s_resourceable_type == TComment::class),
            'i_size' => $this->i_size,
            'fk_i_user_id' => (int) $this->fk_i_resourcable_id
        ];
    }
}
