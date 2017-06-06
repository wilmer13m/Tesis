<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientController extends Controller
{
    //
    public function index()
    {
        return Client::all();
    }


    public function show($id){
        //
        try{

            $client = Client::find($id);

            if(!$client){

                return response()->json(['message'=>'This id dosent exist'],404);

            }

            return response()->json(['estatus'=>true,'location'=>$client],200);


        }catch(\Exception $e){

            return response('Something Bad', 500);

        }
    }
}
