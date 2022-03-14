<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HRdata extends JsonResource
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
            'leaveID' => $this-> leaveID,
            'userID' => $this->userID,
            'leaveType' => $this->leaveType,
            //'stock' => $this->stock == 0 ? 'Out of Stock' : $this->stock,
            'leaveDate' => $this->leaveDate,
            'status' => $this->status,
        ];
    }
}
