@extends('layouts.landing')

@push('styles')
   <style>
      .card-testimonios {
         background: #FFFFFF 0% 0% no-repeat padding-box !important;
         border-radius: 30px!important;
         opacity: 1;
      }
   </style> 
@endpush

@section('content')
   <div class="col-md-12 py-5" style="background-color: #FFFFFF;">
      <div class="col-md-8 offset-md-2" style="padding: 50px 50px; text-align: center;">
         <h3>El programa de <b style="color: #00C65B;">My Trading Academy Pro</b> tiene un modelo que se basa en el marketing de recomendación. .</h3>
         <h5>Nuestro posicionamiento es a través del marketing de recomendación, ganamos solo si tu ganas y haces ganar a tus clientes.</h5>
      </div>
   </div>

   <div class="col-md-12" style="background-color: #F5F5F5;">
      <div class="col-md-8 offset-md-2" style="padding: 50px 50px; text-align: center;">
         <h1 class="font-weight-bold" style="color: #00C65B;">Comisiones Afiliados</h1>
      </div>
   </div>


   <div class="container-fluid pb-5" style="background-color: #F5F5F5;">
   	<div class="row">
   		<div class="col-md-12">
   			<div class="af row ">
   				
   				<div class="col-md-10">
   					<div class="row">
                     <div class="col-md-3 pl-0 pr-0">
                        <div class="card card-comisiones" style="background-color:  #00C65B !important;">
                           <div class="card-body text-center">
                             <h5 class="card-title text-white comisiones-card-title nivel-body">Nivel</h5>
                           </div>
                        </div>
                     </div>
   						<div class="col-md-3 pl-0 pr-0">
                        <div class="card card-comisiones" style="background-color: #FFF!important;">
                           <div class="card-body text-center">
                              <h5 class="card-title text-primary comisiones-card-title" style="color: #00C65B !important;">Membresía <br> Find</h5>
                              <hr class="com-line-blue">
                              <p class="card-text">30% DE COMISIÓN POR CADA AFILIACIÓN</p>
                              <p class="card-text">Aplica sobre el costo preferencial</p>
                           </div>
                        </div>
   						</div>
   						<div class="col-md-3 pl-0 pr-0">
                        <div class="card card-comisiones" style="background-color: #00C65B !important;">
                           <div class="card-body text-center">
                              <h5 class="card-title text-white comisiones-card-title">Membresía <br> Buy</h5>
                              <hr class="com-line-white">
                              <p class="card-text text-white">30% DE COMISIÓN POR CADA AFILIACIÓN</p>
                              <p class="card-text text-white">Aplica sobre el costo preferencial</p>
                           </div>
                        </div>
   						</div>
   						<div class="col-md-3 pl-0 pr-0">
                        <div class="card card-comisiones" style="background-color: #FFF!important;">
                           <div class="card-body text-center">
                              <h5 class="card-title text-primary comisiones-card-title" style="color: #00C65B !important;">Membresía <br>  Win</h5>
                              <hr class="com-line-blue">
                              <p class="card-text">30% DE COMISIÓN POR CADA AFILIACIÓN</p>
                              <p class="card-text">Aplica sobre el costo preferencial</p>
                           </div>
                        </div>
   						</div>
   					</div>
   				</div>
   			</div>
   		</div>
   	</div>
   </div>


   <div class="col-md-12" >
      <div class="col-md-8 offset-md-2" style="padding: 50px 50px; text-align: center;">
         <h4 style="color: white;letter-spacing: -0.57px;">Sin importar la categoría de la membresía se afilie tu referido.<br> o si lo paga mensual , anual o vitalicio.</h4>
      </div>
   </div>

   <div class="col-md-12" style="background-color: white;">
      <div class="col-md-8 offset-md-2" style="padding: 30px 20px; text-align: center;">
         <h5 style="color:#818181;">
            Por supuesto y además del valor simbólico que le damos a tu trabajo, también lo retribuimos económicamente, ofreciéndote hasta un <span style="color: #00C65B;">10% del valor de cada membresía</span>.<br><br>
            
            <b>COMISIONES DE NUESTROS TALENTOS</b>
         </h5>

         <table class="table table-responsive table-bordered">
            <thead>
               <th>* Nivel</th>
               <th>Membresía del Find</th>
               <th>Membresía del Buy</th>
               <th>Membresía del Win</th>
            </thead>
            <tbody>
               <tr>
                  <td></td>
                  <td colspan="3">
                     <span style="color: red; font-weight: bold;">
                        10% DE COMISION POR CADA MEMBRESÍA<br><br>
                        Aplica sobre el costo preferencial <br><br>
                     </span>
                     <span style="color: #2A91FF;">
                        o si lo paga mensual , anual o vitalicio. 
                     </span>
                  </td>
               </tr>
            </tbody>
         </table>
      </div>
   </div>

@endsection
