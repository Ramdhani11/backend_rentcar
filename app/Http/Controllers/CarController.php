<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use App\Http\Resources\CarResource;
use App\Http\Resources\CarDetailResource;

class CarController extends Controller
{

 public function index()
 {
  $cars= Car::all();

  return CarResource::collection($cars);
 }

 public function showById($id)
 {
  $car = Car::findOrFail($id);

  return new CarDetailResource($car);
 }

 public function searchCar(){
   $cars = Car::where('merek','LIKE','%o%' );
   return [$cars];
 }

 public function add(Request $req){
  $add = new Car;
  $add->merek=$req->merek;
  $add->model=$req->model;
  $add->tarif=$req->tarif;
  $add->no_plat=$req->no_plat;
  $add->tersedia= 1 ;

  $result = $add->save();

  if($result){

    return ["Result"=>"New car created"];
  }else{
    return ["Result"=>"Error"];

  }

 }

}
