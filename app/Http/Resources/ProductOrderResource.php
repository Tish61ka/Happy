<?php

namespace App\Http\Resources;

use App\Models\CustomProduct;
use App\Models\Product;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductOrderResource extends JsonResource
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
            'id_product' => Product::find($this->id_product),
            'id_product_custom' => CustomProduct::find($this->id_product_custom),
            'id_order' => $this->id_order,
            'count' => $this->count
        ];
    }
}
