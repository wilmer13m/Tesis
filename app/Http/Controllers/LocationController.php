<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    //
    public function index(){

        return Location::all();
    }




    public function show($id){
        //
        try{

            $location = Location::find($id);

            if(!$location){

                return response()->json(['This id dosent exist'],404);

            }

            return response()->json(['estatus'=>true,'location'=>$location],200);


        }catch(\Exception $e){

            return response('Something Bad', 500);

        }
    }
}
