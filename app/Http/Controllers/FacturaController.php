<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacturaController extends Controller
{
    
    public function getData(Request $request){
        return response()->json([
            'status'=>'200',
             'message'=>'data',
        ]) ; 

    }
    public function save(Request $request){
        return response()->json([
            'status'=>'200',
             'message'=>'guardado con exito',
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
        ])  ;

    }
}
