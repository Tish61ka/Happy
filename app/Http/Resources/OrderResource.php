<?php

namespace App\Http\Resources;

use App\Models\ProductOrder;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use JsonSerializable;

class OrderResource extends JsonResource
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
            'products' => ProductOrderResource::collection(ProductOrder::all()->where('id_order', $this->id)),
            'user' => new UserResource($this->user),
            'price' => $this->total_price,
            'status' => $this->status,
            'total_count' => $this->total_count,
        ];
    }
}
