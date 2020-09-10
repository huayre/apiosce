<?php

namespace App\Http\Controllers;

use App\Provider;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function validarLicitacion($ruc)
    {
        $estado=0;

        $Historial=Provider::where('ruc',$ruc)->get();
         foreach ($Historial as $item)
         {
             $condicion1=$item->sansion_obras_inconclusas;
             $condicion2=$item->familiares_dentro_municipalidad;
             $condicion3=$item->familiares_congresistas;
             $condicion4=$item->registrado_proveedor_estado;
         }


         if($condicion1==0 && $condicion2==0 && $condicion3==0 && $condicion4==0)
         {
             $estado=1;
         }
        return response()->json(['estado'=>$estado]);
    }
    public function listhistorial()
    {
        return response()->json(Provider::all());
    }


}
