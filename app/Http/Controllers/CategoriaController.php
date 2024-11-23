<?php

namespace App\Http\Controllers;
use App\Http\Controller;
use App\Models\Categoria;



class CategoriaController extends Controller
{
    //
    public function save(Request $request){
       
      
    

        return response()->json([
            'status'=>'200',
             'message'=> 'guardado con exito',
             'data'=> $request->nombre,
             
        ]);

    }
    public function getData(Request $request){
        return response()->json([
            'status'=>'200',
             'message'=>'data',
        ])  ;

    }

    public function response(Request $request){
        return response()->json([
            'status'=>'200',
             'message'=>'data',
        ])  ;

    }

    public function delete(Request $request){
        return response()->json([
            'status'=>'200',
             'message'=>'delete',
        ]);

    }
}
