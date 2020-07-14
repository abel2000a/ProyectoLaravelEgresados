<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Historial;

class HistorialController extends Controller
{
    //
    public function index()
    {

        $detalle = Historial::all(); 
        return response()->json($detalle);
    }

    
    public function create(Request $request)
    {
        
        Historial::create($request->all());
        return response()->json(['success' => true]);
    }


    public function show($detalle_id)
    {
       
        $detalle= Historial::findOrFail($detalle_id);
        
        return response()->json($detalle);
    }


    public function update(Request $request, $detalle_id)
    {
        
            Historial::findOrFail($detalle_id)->update($request->all());
            return response()->json(['success' => true]);
         
    }

    
    public function destroy($detalle_id)
    {
        Historial::findOrFail($detalle_id)->delete();
        return response()->json(['success' => true]);
    }
}
