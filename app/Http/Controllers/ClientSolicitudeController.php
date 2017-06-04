<?php

namespace App\Http\Controllers;

use App\Solicitude;
use Illuminate\Http\Request;

class ClientSolicitudeController extends Controller
{
    //
    public function index($clientId)
    {
        return Solicitude::where('client_id',$clientId)->get();
    }

}
