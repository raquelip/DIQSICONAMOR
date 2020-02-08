@extends('adminlte::layouts.app')
@section('htmlheader_title')

@endsection
@section('main-content')
<div>
   <form role="form" action="{{ url('actualizarcat',$datos->id) }}" method="post">
           
            @csrf
            <div class="form-group">
                <label>Nombre de Categoria</label>
                <input type="text" class="form-control" placeholder="Ingrese el Nombre" value="{{$datos->Nombre}}" name="nombre">
            </div>
            
            <div class="box-footer">
                <button type="submit" class="btn btn-warning">Editar</button>
            </div>
        </form>
        </div> 
       
@endsection






