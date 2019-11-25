@extends("plantilla")
@section("modulo")<div><i class="fas fa-piggy-bank"></i> Bancos</div> @endsection
@section("contenido")



<form method="POST" action="{{url('bancos')}}">
    {{csrf_field()}}

<div class="row">
    <div class="col-md-3">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
           <span class="input-group-text" id="basic-addon1"><i class="fas fa-university"></i></span>
         </div>
            <input required maxlength="25" type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre del Banco" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
           <span class="input-group-text" id="basic-addon1"><i class="fas fa-phone-square-alt"></i></span>
         </div>
            <input required maxlength="10" type="text" id="telefono" name="telefono" class="form-control" placeholder="Telefono" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
           <span class="input-group-text" id="basic-addon1"><i class="fas fa-barcode"></i></span>
         </div>
            <input required maxlength="10" type="text" id="sucursal" name="sucursal" class="form-control" placeholder="Codigo" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    </div>
</div>
    <div> <button class="btn btn-success">Guardar</button> </div>
        </form>
<div class="row">
    <div class="col-md-6">
        @if(session()->has('success'))
        <div class="alert alert-success">
            <i class="fas fa-check-circle"></i>
            {{session()->get('success')}}    
        </div>
        @endif
        @if(session()->has('error'))
        <div class="alert alert-danger">
            <i class="fas fa-exclamation-triangle"></i>
            {{session()->get('error')}}    
        </div>
        @endif
 </div>
</div>
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Telefono</th>
                            <th>Sucursal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bancos as $row)
                        <tr><td>{{$row->nombrebanco}}</td><td>{{$row->telefono}}</td>
                            <td>{{$row->codigo}}</td><td>{{$row->nombre}}</td><td>
                                <a href="{{url("bancos/".$row->id."/edit")}}" class="btn btn-success"><i class="far fa-edit" aria-hidden="true"></i></a></td><td><form method="POST" action="{{route("bancos.destroy",$row->id)}}"> @method('DELETE') {{csrf_field()}} <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></form></td></tr>
                        @endforeach
                    </tbody>
                    
                </table>
                
            </div>
        </div>
    </div>
    
    

@endsection