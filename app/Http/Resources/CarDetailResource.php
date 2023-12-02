<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CarDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $tersedia = "";

        if($this->tersedia === 1){
              $tersedia ="Tersedia";
            }else{
                $tersedia ="Lagi disewa";
            };
    
        return [
        'id'=> $this->id,
        'merek'=> $this->merek,
        "tersedia"=>$tersedia,
        "tarif"=>$this->tarif,
        ];
    }
}
