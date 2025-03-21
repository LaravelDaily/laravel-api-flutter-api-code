<?php

namespace App\Http\Resources;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Transaction */
class TransactionResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'category_id' => $this->category_id,
            'category_name' => $this->category->name,
            'amount' => number_format($this->amount, 2),
            'transaction_date' => $this->transaction_date->format('m/d/Y'),
            'description' => $this->description,
            'created_at' => $this->created_at,
        ];
    }
}