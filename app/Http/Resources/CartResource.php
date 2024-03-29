<?php

namespace App\Http\Resources;

use App\Models\CustomProduct;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use JsonSerializable;

class CartResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array|Arrayable|JsonSerializable
     */
    public function toArray($request): array|JsonSerializable|Arrayable
    {
        return [
            'id' => $this->id,
            'count' => $this->count,
            'user' => new UserResource($this->user),
            'product' => new ProductResource($this->product),
            'custom' => CustomProduct::find($this->custom_id)
        ];
    }
}
