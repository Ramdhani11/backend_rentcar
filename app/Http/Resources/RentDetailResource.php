<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RentDetailResource extends JsonResource
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
            "id"=>$this->id,
            "tanggal_sewa"=>$this->tgl_awal,
            "tanggal_akhir"=>$this->tgl_akhir,
            "waktu"=>$this->waktu,
            "user_id"=>$this->id_user,
            "car_id"=>$this->id_car,
            "user"=>$this->user,
            "car"=>$this->car,
            "total"=>$this->car->tarif * $this->waktu,
        ];
    }
}
