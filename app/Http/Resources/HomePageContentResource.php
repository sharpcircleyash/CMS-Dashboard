<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HomePageContentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id ?? 1,
            'title' => $this->title ?? '',
            'description' => $this->description ?? '',
            'created_at' => $this->created_at ?? now(),
            'updated_at' => $this->updated_at ?? now(),
        ];
    }
    public function with(Request $request): array
    {
        return [
            'success' => true,
            'message' => 'Data fetch successfully.',
        ];
    }
}
