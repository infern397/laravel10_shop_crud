<?php

namespace App\Http\Resources\Order;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
            'customer_firstname' => $this->customer_firstname,
            'customer_lastname' => $this->customer_lastname,
            'customer_email' => $this->customer_email,
            'customer_address' => $this->customer_address,
            'total' => $this->total,
            'products' => $this->products()->get()->map(function ($product) {
                return $product['pivot'];
            })
        ];
    }
}
