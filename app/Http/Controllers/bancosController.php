<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bancosModel;

class bancosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bancos = bancosModel::all();
       return view("bancos", compact("bancos"));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(bancosModel::where("nombrebanco",$request->nombre)->where("codigo",$request->sucursal)->exists()){
            return redirect("bancos")->with("error","Ya existe la sucursal"
                    .$request->sucursal."para el banco".$request->nombre);
        }
        else{
        $bancos=new bancosModel();
        $bancos->nombrebanco=$request->nombre;//primero es el de la bd y el segundo es el del formulario
        $bancos->telefono=$request->telefono;//primero es el de la bd y el segundo es el del formulario
        $bancos->codigo=$request->sucursal;//primero es el de la bd y el segundo es el del formulario
        $bancos->save();
        return redirect("bancos")->with("success", "Banco almacenado");
        
        //return redirect()->("plantilla.blade.php"); //nombre de la vista
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(bancosModel::where("id",$id)->exists()){
        $bancos = bancosModel::select("*")->where("id",$id)->get();
        return view("editabancos", compact("bancos"));
        }
        else{return redirect("bancos")->with("error", "El Banco no existe");
        
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         if(bancosModel::where("id",$id)->exists()){
        $bancos = bancosModel::find($id);
        $bancos->nombrebanco=$request->nombre;//primero es el de la bd y el segundo es el del formulario
        $bancos->telefono=$request->telefono;//primero es el de la bd y el segundo es el del formulario
        $bancos->codigo=$request->sucursal;//primero es el de la bd y el segundo es el del formulario
        $bancos->save();
        return redirect("bancos")->with("success", "Banco actualizado");
        }
        else{return redirect("bancos")->with("error", "El Banco no existe");
        
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(bancosModel::where("id",$id)->exists()){
        $bancos = bancosModel::find($id);
        $bancos->delete();
        return redirect("bancos")->with("success", "Banco eliminado");
    }
        else{return redirect("bancos")->with("error", "El Banco no existe");
        
        }
    }
}
