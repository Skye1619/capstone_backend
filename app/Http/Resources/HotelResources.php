<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\PriceResource;
use App\Http\Resources\UserResource;

class HotelResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'hotel_name' => $this->hotel_name,
            'hotel_details' => $this->hotel_details,
            'hotel_address' => $this->hotel_address,
            'price' => new PriceResource($this->price),
            'rating' => $this->rating,
            'image_url' => $this->image_url,
            'owner' => new UserResource($this->user),
        ];
    }
}
