@extends('layouts.dashboardnew')

@section('content')

<div class="col-xs-12">
  <div class="box">
    <div class="box-body">
      {{-- Informarcion --}}
      @include('setting.componentes.informe.informacion')
      {{-- formulario --}}
      @include('setting.componentes.informe.formulario')
    </div>
  </div>
</div>

@include('setting.componentes.informe.nota')

@endsection

@push('script')
<script type="text/javascript">

  $(document).ready(function () {
    $('.summernote').summernote({
      toolbar:[
        [ 'style', [ 'style' ] ], 
        [ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear'] ], 
        [ 'fontname', [ 'fontname' ] ], 
        [ 'fontsize', [ 'fontsize' ] ], 
        [ 'color', [ 'color' ] ], 
        [ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ], 
        [ 'table', [ 'table' ] ], 
        ['insert', ['link', 'picture']],
      ]
    });
  })
  
  var rangos = null
  var productos = null
  $(document).ready(function () {
    $.get('getrangosall', function (response) {
      rangos = JSON.parse(response)
    })
    $.get('getproductosall', function (response) {
      productos = JSON.parse(response)
    })
  })

  function toggle() {
    $('.mostrar').toggle('slow')
  }
  // detalles de la comisiones
  function comisiondetalle() {
    $('#valor').empty()
    $('#valor2').empty()
    let tipoComision = $('#tipocomision').val()
    let niveles = $('#niveles').val()
    
    if(tipoComision == 'categoria'){
        $('#subcategoria').show();
    }else if(tipoComision == 'producto'){
        $('#subcategoria').hide();
    }
    
    if (tipoComision == 'general') {
      $('#valor').append(
        '<label for="">Valor de Comision</label>' +
        '<input type="number" step="any" class="form-control" name="valorgeneral">'
      )
    } else if (tipoComision == 'detallado') {
      for (var i = 0; i < niveles; i++) {
        $('#valor').append(
          '<label for="">Valor de Comision Nivel ' + (i + 1) + '</label>' +
          '<input type="number" step="any" class="form-control" name="nivel' + (i + 1) + '">'
        )
      }
    } else if (tipoComision == 'categoria') {
      if (rangos.length < 2) {
        $('#valor2').append(
          '<div class="alert alert-warning" role="alert">' +
          '<h4> <b>Aviso:</b> Para usar este modo, primero debes tener la configuraci贸n de rango lista</h4>' +
          '</div>'
        )
      } else {
        $('#valor2').append(
          '<div class="alert alert-info" role="alert">' +
          '<h4> <b>Nota:</b> Colocar el nombre exacto de la categoria que esta en el wordpress</h4>' +
          '</div>'
        )
        let comision = ''
        for (let i = 0; i < niveles; i++) {
            
            comision = comision + '<div class="form-group col-xs-12 col-sm-6 col-lg-4">' +
              '<label for="">Ganancia</label>' +
              '<input type="number" class="form-control" step="any" required min="0" name="categoria1' + (i + 1) + '">' +
              '</div>'

          
          $('#valor2').append(
            '<h4 class="col-xs-12"> Configuracion de la Categoria ' + (i + 1) + ' </h4>' +
            '<div class="form-group col-xs-12 col-sm-6 col-lg-4">' +
            '<label for="">Nombre de la Categoria que esta en Wordpress</label>' +
            '<input type="text" class="form-control" required name="categoria' + (i + 1) + '">' +
            '</div>' + comision
          )
          comision = ''
        }

      }
    } else if (tipoComision == 'producto') {
      if (productos.length <= 0) {
        $('#valor2').append(
          '<div class="alert alert-warning" role="alert">' +
          '<h4> <b>Aviso:</b> Para usar este modo, primero debes tener productos registrado</h4>' +
          '</div>'
        )
      } else {
        $('#valor2').append(
          '<div class="alert alert-info" role="alert">' +
          '<h4> <b>Nota:</b> Si el valor es 0, ese producto no generara puntos</h4>' +
          '</div>'
        )
        let comision = ''
        productos.forEach(item => {
         
            comision = comision + '<div class="form-group col-xs-12 col-sm-6 col-lg-4">' +
              '<label for="">Ganancias del Producto: ' + item.ID + '</label>' +
              '<input type="number" class="form-control" step="any" required min="0" name="idproducto' + item.ID + '">' +
              '</div>'
          
          $('#valor2').append(
            '<h4 class="col-xs-12"> Configuracion del Producto - ID: ' + item.ID + ' </h4>' +
            comision
          )
          comision = ''
        })
      }
    }
  }
 </script>
@endpush