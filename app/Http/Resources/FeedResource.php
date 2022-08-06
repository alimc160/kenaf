<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class FeedResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body,
            'image' => $this->image,
            'created_at' => Carbon::parse($this->created_at)->format('j F, Y'),
            'author' => $this->author,
            'language' => $this->lang,
            'sentiment' => $this->sentiment,
            'url' => $this->url,
        ];
    }
}
