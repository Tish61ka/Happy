<?php

namespace App\Http\Resources;

use App\Models\Type;
use JsonSerializable;
use Illuminate\Http\Request;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
      'title' => $this->title,
      'description' => $this->description,
      'price' => $this->price,
      'structure' => $this->structure,
      'image' => $this->image,
      'type' => Type::find($this->type),
    ];
  }
}
