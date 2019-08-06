@extends("theme.$theme.layout")
@section('titulo')
    Sistema menus
@endsection

@section('scripts')
<script src="{{asset("assets/pages/scripts/admin/menu/crear.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
    <div class="row">
        <div class="col-lg-12">
            @include('includes.form-error')
            @include('includes.form-mensaje')
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Bordered Table</h3>
                </div>
                <form action={{route('guardar_menu')}} id='form-general' class="form-horizontal" method="POST">
                    @csrf
                    <div class="box-body">
                      <!-- inicio formulario -->
                      @include('admin.menu.form')
                      <!-- Fin formulario --->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                      <div class="col-lg-3">
                      </div>
                      <div class="col-lg-6">
                          @include('includes.boton_form_crear')
                      </div>
                    </div>
                    <!-- /.box-footer -->
              </form>
            </div>
        </div>
    </div>
@endsection