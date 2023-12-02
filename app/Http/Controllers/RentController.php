<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rent;
use App\Http\Resources\RentResource;
use App\Http\Resources\RentDetailResource;

class RentController extends Controller
{
    public function index(){
        $rents = Rent::all();

        return RentResource::collection($rents);
    }

    public function showById($id){
        $rent = Rent::with('user:nama,no_sim,no_hp,id','car:id,merek,model,no_plat,tarif')->findOrFail($id);

        return new RentDetailResource($rent);
    }
}
