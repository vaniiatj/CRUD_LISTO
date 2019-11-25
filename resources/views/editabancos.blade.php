@extends("plantilla")
@section("modulo")Editar banco @endsection
@section("contenido")
<form method="POST" action="{{route("bancos.update", $bancos[0]->id)}}">
    @method('PATCH')
    {{csrf_field()}}
<div class="row">
    <div class="col-md-3">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
           <span class="input-group-text" id="basic-addon1"><i class="fas fa-university"></i></span>
         </div>
            <input value="{{$bancos[0]->nombrebanco}}" maxlength="25" required type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre del Banco" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
           <span class="input-group-text" id="basic-addon1"><i class="fas fa-phone-square-alt"></i></span>
         </div>
            <input value="{{$bancos[0]->telefono}}" maxlength="10" required type="text" id="telefono" name="telefono" class="form-control" placeholder="Telefono" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
           <span class="input-group-text" id="basic-addon1"><i class="fas fa-barcode"></i></span>
         </div>
            <input value="{{$bancos[0]->codigo}}" maxlength="10" required  type="text"  id="sucursal" name="sucursal" class="form-control" placeholder="Codigo" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    </div>
</div>
    
    <div> <button class="btn btn-success">Guardar</button> </div>
        </form>
@endsection
