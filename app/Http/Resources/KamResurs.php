<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class KamResurs extends JsonResource
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
            'id' => $this->resource->id,
            'tablice' => $this->resource->tablice,
            'model' => $this->resource->model,
            'vozac' => $this->resource->vozac,
            'prevoznik' => new PrvResurs($this->resource->prevoznik),
        ];
    }
}
