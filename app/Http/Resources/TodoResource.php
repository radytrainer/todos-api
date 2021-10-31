<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TodoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
       return [
           'user_id' => $this->user_id,
           'title' => $this->title,
           'description' => $this->description,
           'status' => $this->status,
           'created_at' =>$this->created_at->format('j l F Y | h:i:A')
       ];
    }
}
