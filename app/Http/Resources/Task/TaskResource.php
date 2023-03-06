<?php

namespace App\Http\Resources\Task;

use App\Http\Resources\Priority\PriorityResource;
use App\Http\Resources\User\UserResource;
use Illuminate\Http\Resources\Json\JsonResource;

class TaskResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request) : array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'notes' => $this->notes,
            'date' => $this->date,
            'is_done' => $this->is_done,
            'priority' => new PriorityResource($this->priority),
            'user' => new UserResource($this->user),
            'created_at' => $this->created_at
        ];
    }
}
