@extends("plantilla")
@section("modulo")<div><i class="fas fa-piggy-bank"></i> Bancos</div> @endsection
@section("contenido")
<div class="row">
    <div class="col-md-3">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
           <span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></i></span>
         </div>
       <input type="text" class="form-control" placeholder="ID" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
           <span class="input-group-text" id="basic-addon1"><i class="fas fa-university"></i></span>
         </div>
       <input type="text" class="form-control" placeholder="Nombre del Banco" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
           <span class="input-group-text" id="basic-addon1"><i class="fas fa-phone-square-alt"></i></span>
         </div>
       <input type="text" class="form-control" placeholder="Telefono" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
           <span class="input-group-text" id="basic-addon1"><i class="fas fa-barcode"></i></span>
         </div>
       <input type="text" class="form-control" placeholder="Codigo" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    </div>
</div>
@endsection