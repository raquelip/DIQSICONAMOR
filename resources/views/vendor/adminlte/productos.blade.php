@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Registro de Productos</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{ url('productos') }}" enctype="multipart/form-data">
            	@csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre de Producto</label>
                  <input type="text" class="form-control" id="nombreprod" placeholder="" name="nombre">
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">Seleccione Categoria de Producto</label>
                  <select name="categorias_id">
                  	@foreach ($cate as $categoria)
                  		<option value="{{$categoria->id}}">{{$categoria->Nombre}}</option>
                  	@endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Precio de Producto</label>
                  <input type="text" class="form-control" id="precio" placeholder="" name="precio">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Descripción de Producto</label>
                  <input type="text" class="form-control" id="decripcion" placeholder="" name="descripcion">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Cargar Imagen de Producto</label>
                  <input type="file" id="imagenprod" name="imagen">
                </div>
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Agregar</button>
              </div>
            </form>
          </div>

          <!-- <div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Productos Registrados</h3>
    </div>
    <div class="box-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nombre de Producto</th>
                     <th>Precio de Producto</th>
                      <th>Descripción de Producto</th>
                       <th>Imagen de Producto</th>
                         <th>Categoria de Producto</th>
                         <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produ as $produc)
                <tr>
                    <td>{{$produc->id}}</td>
                    <td>{{$produc->Nomproducto}}</td>
                    <td>{{$produc->Precio}}</td>
                    <td>{{$produc->Descripcion}}</td>
                    <td><img width=20%; height=10%; src="img\{{$produc->Imagen}}"></td>
                     <td>{{$categoria->Nombre}}</td> 
                     <td>
                      <a href="{{url('editarproducto',$produc->id) }}"><button type="button" class="btn btn-warning"><i class="fa  fa-pencil"></i></button></a>
                       <a href="{{url('eliminarproduct',$produc->id) }}"><button type="button" class="btn btn-danger"><i class="fa  fa-trash"></i></button></a>
    
                    </td>

          </tr>
                    @endforeach
            </tbody>

        </table>
    </div>
</div>-->
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Productos Registrados</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Nombre de Producto</th>
                     <th>Precio de Producto</th>
                      <th>Descripción de Producto</th>
                       <th>Imagen de Producto</th>
                         <th>Categoria de Producto</th>
                         <th>Opciones</th>
                </tr>
            </thead>
                <tbody>
                @foreach ($produ as $produc)
                <tr>
                    <td>{{$produc->id}}</td>
                    <td>{{$produc->Nomproducto}}</td>
                    <td>{{$produc->Precio}}</td>
                    <td>{{$produc->Descripcion}}</td>
                    <td><img width=20%; height=10%; src="img\{{$produc->Imagen}}"></td>
                     <td>{{$categoria->Nombre}}</td> 
                     <td>
                      <a href="{{url('editarproducto',$produc->id) }}"><button type="button" class="btn btn-warning"><i class="fa  fa-pencil"></i></button></a>
                       <a href="{{url('eliminarproduct',$produc->id) }}"><button type="button" class="btn btn-danger"><i class="fa  fa-trash"></i></button></a>
    
                    </td>

          </tr>
                    @endforeach
            </tbody>
                
              </table></div></div></div>
            </div>
            <!-- /.box-body -->
          </div>
@endsection


