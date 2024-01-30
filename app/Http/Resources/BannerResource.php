<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\{JsonResource,ResourceCollection};

class BannerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return $this->collection->foreach(function($val) => {
        // });
        return [
            'id' => $this->id ?? 1,
            'title' => $this->title ?? '',
            'src' => $this->src ?? '',
            'created_at' => $this->created_at ?? now(),
            'updated_at' => $this->updated_at ?? now(),
        ];
        // return ['data' => $this->collection];
    }
    public function with(Request $request): array
    {
        return [
            'success' => true,
            'message' => 'Data fetch successfully.',
        ];
    }
}
