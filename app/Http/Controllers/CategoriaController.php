<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categoria; // carga el modelo

class CategoriaController extends Controller
{
    //get All
    public function getCategoria(){
        return response()->json(categoria::all(), 200);
    }

    //get By Id
    public function getCategoriaById($id){
        $categoria = categoria::find($id);

        if (is_null($categoria)) {
            return response()->json(['Mensaje'=>'Registro no encontrado'], 404);
        }

        return response()->json($categoria, 200);
    }

    //Add category
    public function addCategoria(Request $request){
        $categoria = categoria::create($request->all());
        return response($categoria, 200);
    }

    //Update categoria
    public function updateCategoria(Request $request, $id){
        $categoria = categoria::find($id);
        if (is_null($categoria)) {
            return response()->json(['Mensaje'=>'Registro no encontrado'], 404);
        } 

        $categoria->update($request->all());
        return response($categoria, 200);
    }

    //Delete categoria
    public function deleteCategoria($id){
        $categoria = categoria::find($id);

        if (is_null($categoria)) {
            return response()->json(['Mensaje'=>'Registro no encontrado'], 404);
        } 

        $categoria->delete();
        return response()->json(['Mensaje'=>'Registro Eliminado'], 200);
    }
}
