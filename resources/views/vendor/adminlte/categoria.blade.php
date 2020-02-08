@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
	<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Registro de Categorias</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="{{ url('categoria') }}">
               @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nombrecategoria" placeholder="categoria" name="nombre">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Registrar</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>	
           <div class="box-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Categoria de Productos</th>
                   <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datos as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->Nombre}}</td>
                    <td>
                      <a href="{{url('editarcat',$item->id) }}"><button type="button" class="btn btn-warning"><i class="fa  fa-pencil"></i></button></a>
                      
                      <button type="button" class="btn btn-danger"><i class="fa  fa-trash"></i></button>
                       <a href="{{url('eliminarcat',$item->id) }}"></a>
    
                    </td>
                    @endforeach
            </tbody>   
        </table>
    </div>
	</div>
@endsection
