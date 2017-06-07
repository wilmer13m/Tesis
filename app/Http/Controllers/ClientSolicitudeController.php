<?php

namespace App\Http\Controllers;

use App\Client;
use App\Solicitude;
use Illuminate\Http\Request;
use App\Http\Requests;

use Illuminate\Support\Facades\Input;


class ClientSolicitudeController extends Controller
{
    //
    public function index($clientId)
    {
        try{

            $solicitude = Solicitude::where('client_id',$clientId)->get();

            if(!$solicitude){

                return response()->json(['estatus'=>false,'message'=>'This id dosent exist'],404);
            }

            return response()->json(['estatusindex'=>true,'solicitudes'=>$solicitude],200);

        }catch (\Exception $e){


        }

    }


    //creando una solicitud de mantenimiento para un cliente en particular
    public function store(Request $request, $clientId){

        try{

            $client = Client::find($clientId);

            if (!$client){

                return response()->json(['estatus'=>false,'message'=>'This id dosent exist'],404);

            }


            $solicitude = new Solicitude([

                       'location_id' => $request->input('location_id'),
                       'estatus' => $request->input('estatus'),
                       'descripcion' =>$request->input('descripcion'),
                       'client_id' =>$client->id
                   ]);

                $solicitude->save();

                return response()->json(['estatus'=>true,'solicitude'=>$solicitude],200);

        }catch (\Exception $e){

            return response('Something Bad', 500);

        }

    }


    //mostrar una tarea en particular de un proyecto
    public function show($clientId,$solicitudeId)
    {

        try {

            $solicitude = Solicitude::findOrFail($solicitudeId);

            if (!$solicitude) {

                return response()->json(['estatus' => false, 'message' => 'This id dosent exist'], 404);
            }

            return response()->json(['estatusshow' => true, 'solicitude' => $solicitude], 200);


        }catch (\Exception $e){

            return response(['Something Bad' => $e], 500);

        }
    }

    //modificar una tarea en particular de un proyecto
    public function update($client_id,$solicitudeId)
    {

        try{

            $solicitude = Solicitude::findOrFail($solicitudeId);
            if(!$solicitude){

                return response()->json(['estatus'=>false,'message'=>'This id dosent exist'],404);
            }

            $solicitude->update(Input::all());
            return response()->json(['estatus'=>true,'solicitudeupdate'=>$solicitude],200);



        }catch (\Exception $e){

            return response('Something Bad', 500);

        }

    }


    //eliminar una tarea en particular de un proyecto
    public function destroy($clientId, $solicitudeId)
    {

        try{

            $solicitude = Solicitude::findOrFail($solicitudeId);
            if(!$solicitude){

                return response()->json(['estatus'=>false,'message'=>'This id dosent exist'],404);
            }

            $solicitude->delete();
            return response()->json(['estatus'=>true,'message'=>'borrado'],200);

        }catch(\Exception $e){

            return response('Something Bad', 500);

        }

    }

}
