<?php

namespace App\Http\Resources\Task;

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
            'title' => $this->title,
            'notes' => $this->notes,
            'date' => $this->date,
            'is_done' => $this->is_done,
            'priority' => $this->priority,
            'created_at' => $this->created_at
        ];
    }
}
