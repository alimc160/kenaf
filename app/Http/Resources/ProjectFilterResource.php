<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectFilterResource extends JsonResource
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
            'project_id' => $this->project_id,
            'project'=>new ProjectResource($this->project),
            'created_at' => Carbon::parse($this->created_at)->format('m-d-Y H:i'),
            'filters' => FilterResource::collection($this->whenLoaded('filters')),
            'entities' => EntityResource::collection($this->whenLoaded('entities'))
        ];
    }
}
