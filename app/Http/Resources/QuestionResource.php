<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class QuestionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'title' => $this->title,
            'body' => $this->body,
            'path'  => $this->path,
            'replies' => ReplyResource::collection($this->replies),
            'count' => $this->replies->count(),
            'slug'  => $this->slug,
            'created_at' => $this->created_at->diffForHumans(),
            'user' => $this->user->name,
            'user_id' => $this->user->id
        ];
    }
}
