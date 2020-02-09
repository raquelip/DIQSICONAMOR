

@section('main-content')
    <div class="box box-primary">
            <div class="box-header with-border">
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{ url('actualizarproducto',$produc->id) }}" enctype="multipart/form-data">
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
                <button type="submit" class="btn btn-primary">Editar Producto</button>
              </div>
            </form>
          </div>

           <div class="box">
    <div class="box-header with-border">
       
@endsection