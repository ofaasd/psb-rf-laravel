<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PsbDataPribadiResource extends JsonResource
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
            'file_photo' => $this->file_photo,
            'file_kk' => $this->file_kk,
            'file_ktp' => $this->file_ktp,
            'file_rapor' => $this->file_rapor,
            'created_at' => $this->created_at
        ];
    }
}
