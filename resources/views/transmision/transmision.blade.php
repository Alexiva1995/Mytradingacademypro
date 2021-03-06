@extends('layouts.landing')
@push('styles')
    <style>
    .containerscale:hover{
        transform: scale(1.1);
        z-index: 9;
       }
    
    .aumento{
       font-weight: 700;
       font-size: 18px;
    }

    .card{
       background: none!important;
       background-color: none!important;
       border:none!important;
    }
    </style>
@endpush


@section('content')
@if (!Auth::guest())
<div class="title-page-course col-md"><span class="text-white">
    <h3 class="mb-4"><span class="text-white">Hola</span><span class="text-success"> {{Auth::user()->display_name}}</span><span class="text-white"> ¡Nos alegra verte hoy!</span></h3>
</div>
@endif

<!--<div class="container-fluid courses-slider" style="background-color: #1C1D21;margin-bottom: 0px; padding-bottom: 0px;">
    <div class="container-fluid courses-slider" style="padding-bottom: 0px;">
      <div id="mainSlider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item  active ">
              <div class="overlay"></div>
                  <img src="{{ asset('images/streaming-1.jpg') }}" class="d-block w-100" alt="...">
                   <div class="carousel-caption">
                    <div class="col-md-5 offset-md-5">
                    <div class="estilostreaming">STREAMING</div>
                    <div class="estilostreamingtwo">Disfruta de <b> Sesiones en vivo <b></div>
                  </div>
              </div>
          </div>
        </div>
    </div>
  </div>
</div><!--BANNER END-->

<!--<div class="container-fluid" style="background-color: #1C1D21;">
   <div class="col-md-12">
   <div class="row mt-4">
            <div class="col-md-6">
            <img src="{{ asset('images/fxtfotohome.png') }}" class="img-fluid" alt="...">
            </div>
            <div class="col-md-6" style="margin-top:10%;">
            <img src="{{ asset('images/FTXlive-logo.png') }}" class="img-fluid" alt="...">
               <h5 class="text-white mt-4">
                   El usuario podrá disfrutar, sin importar el lugar en donde se encuentre, con su ordenador o su cel, desde presentaciones de negocios, hasta capacitaciones de todo tipo en vivo, lanzamientos y más.
               </h5>
            
            </div>
      </div>
   </div>
	
</div>
<hr style="height: 1px;background-color: #707070;">
<div class="container-fluid" style="background-color: #1C1D21;">
   <div class="col-md-12">
   <div class="row">
            <div class="col-md-6" style="margin-top:10%;">
               <h1 class="text-danger font-weight-bold ftxlivestreming-text">FTX LIVESTREAMING</h1>
               <h5 class="text-white mt-4">
               Un espacio de entrenamientos en vivo para emprendedores, su propuesta de valor se distingue por ofrecer: Información de primer nivel y en tiempo real, así como motivación para aprender de forma sencilla y herramientas precisas para que se ponga en practica el conocimiento adquirido en los streaming de forma inmediata.
               </h5>
            
            </div>
            <div class="col-md-6">
            <img src="{{ asset('images/fxtmodif.png') }}" class="img-fluid" alt="...">
            </div>
      </div>
   </div>
	
</div>
<hr style="height: 1px;background-color: #707070;">
<div class="container-fluid" style="background-color: #1C1D21;">
   <div class="col-md-12">
   <div class="row">
            <div class="col-md-6">
            <img src="{{ asset('images/ftxliveacceso.png') }}" class="img-fluid" alt="...">
            </div>
            <div class="col-md-6" style="margin-top:5%;">
               <h1 class="text-danger font-weight-bold">ACCESO</h1>
               <h5 class="text-white mt-4">
               El acceso será exclusivo para las personas que sean socios de Beyond y tengan un login de acceso. Dentro de las principales ventajas de este canal, es su fácil acceso, su increíble diseño, así como su chat interactivo, el cual permitirá tener vinculación inmediata y más cercana a la red, ya que la inmediatez y naturalidad en que son transmitidos los enlaces, permitirá a los espectadores participar, haciendo preguntas acerca del contenido que se este explorando, pudiendo aclarar sus dudas de manera inmediata.
               </h5>
            
            </div>
      </div>
   </div>
	
</div>
<hr style="height: 1px;background-color: #707070;">-->


   @if(!empty($evento_actual))
      <div style="width: 100%; position: relative; display: inline-block;">
         <img src="{{ asset('uploads/images/banner/'.$evento_actual->image) }}" alt="" style="height: 500px; width:100%; opacity: 0.5;">
         <div style="position: absolute; top: 2%; left: 5%;">
            <div style="color: white; font-size: 70px; font-weight: bold;">
               <a style="font-weight: bold; width: 180px; font-size: 28px; color: #fff;">PRÓXIMAS TRANSMISIONES</a><br>
               <div style="width: 60%; line-height: 70px;">
                  <a href="{{ route('timelive')}}" class="text-white">{{$evento_actual->title}}</a>
               </div>
             <div class="next-streaming-date">
                    <i class="fa fa-calendar"></i> {{\Carbon\Carbon::parse($evento_actual->date)->formatLocalized(' %d de %B')}}
                    <i class="fa fa-clock" style="padding-left: 20px;"></i>{{\Carbon\Carbon::parse($evento_actual->time)->format('g:i a')}}
                </div>
               <div style="font-size: 35px; padding-top: 60px;">
                  @if (Auth::guest())
                     {{-- USUARIOS INVITADOS --}}
                     <a href="{{route('shopping-cart.membership')}}" class="btn btn-secondary" ><i class="fa fa-shopping-cart" aria-hidden="true"></i> ADQUIRIR MEMBRESÍA</a>
                  @else
                     @if (is_null(Auth::user()->membership_id))
                        {{-- USUARIOS LOGUEADOS SIN MEMBRESÍA  --}}
                        <a href="{{route('shopping-cart.membership')}}" class="btn btn-secondary"><i class="fa fa-shopping-cart" aria-hidden="true"></i> ADQUIRIR MEMBRESÍA</a>
                     @else
                        @if (Auth::user()->membership_status == 1)
                           @if (!in_array($evento_actual->id, $misEventosArray))
                              @if (Auth::user()->streamings < Auth::user()->membership->streamings)
                                 {{-- USUARIOS LOGUEADOS CON STREAMINGS DISPONIBLES Y QUE NO TIENEN EL EVENTO AGENDADO AÚN--}}
                                 <a href="{{ route('schedule.event', [$evento_actual->id]) }}" class="btn btn-danger"><i class="fas fa-chevron-right"></i> AGENDAR </a>
                              @else
                                 @if (Auth::user()->membership_id < 4)
                                    <a href="{{route('shopping-cart.store', [Auth::user()->membership_id+1, 'membresia', 'Mensual'])}}" class="btn btn-warning"><i class="fa fa-shopping-cart" aria-hidden="true"></i> AUMENTAR MEMBRESÍA</a>
                                 @else
                                    <i class="fa fa-times" aria-hidden="true"></i> Límite de Eventos Superado
                                 @endif
                              @endif
                           @else
                              <a href="{{ route('timeliveEvent', $evento_actual->id) }}" class="btn btn-success">Ir al Evento<i class="fas fa-chevron-right"></i></a>
                           @endif
                        @else
                           <a href="{{route('shopping-cart.store', [Auth::user()->membership_id, 'membresia', 'Mensual'])}}" class="btn btn-secondary"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Renovar Membresía</a>
                        @endif
                     @endif
                  @endif
               </div>
            </div>
         </div>
      </div>
   @endif

   @if (Session::has('msj'))
      <div class="col-md-12">
         <div class="alert alert-secondary">
            <button class="close" data-close="alert"></button>
            <span>{{Session::get('msj')}}</span>
         </div>
      </div>
   @endif

   @if (Session::has('msj2'))
      <div class="col-md-12">
         <div class="alert alert-danger">
            <button class="close" data-close="alert"></button>
            <span>{{Session::get('msj2')}}</span>
         </div>
      </div>
   @endif

   @if (!Auth::guest() && $total > 0)
   <div class="section-landing" style="background: #FFFFFF">
      <div class="col">
         <div class="" style="padding-bottom: 35px; color:#111329;">
            <h2 class="text-center font-weight-bold">PRÓXIMAS TRANSMISIONES</h2>
         </div>
      </div>

      @if($total > 0)
         <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="row align-items-center justify-content-center">
                     @php $contador =0; @endphp
                     @foreach($proximos as $proxima)
                        @php $contador++; @endphp

                        @if($contador <= 3)
                              <div class="col-md-3 mt-4">
                                    <div class="card-next-events card">
                                           @if ($proxima->miniatura == null)
                                           <img src="{{ asset('uploads/avatar/'.$proxima->mentor->avatar) }}" class="card-img-top img-prox-events" alt="...">
                                          @else
                                             <img src="{{ asset('uploads/images/miniatura/'.$proxima->miniatura) }}" class="card-img-top img-prox-events" alt="...">
                                          @endif
                                          <div class="card-body">
                                             <form action="{{route('timelive')}}" method="GET">
                                                @csrf
                                                <input id="sigEvent" name="sigEvent" type="hidden" value="{{ $proxima->id }}">
                                                <button class="btn text-left" type="submit" style=" color: #CF202F;"><h5 class="card-title font-weight-bold" style="color:#111329;">{{$proxima->title}}</h5></button>
                                             </form>
                                             <p class="card-text font-weight-bold mr-2" style="margin-top: -10px; font-size: 12px; color:#777777;">   <i class="far fa-calendar mr-2" style="font-size: 18px !important;padding: 5px;"> </i>
                                                {{\Carbon\Carbon::parse($proxima->date)->formatLocalized(' %d de %B')}}
                                                <i class="far fa-clock ml-2" style="font-size: 18px !important;padding: 5px;" aria-hidden="true"></i>{{\Carbon\Carbon::parse($proxima->time)->format('g:i a')}}
                                             </p>
                                             <p class="card-text" style="color:#707070; font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus maximus eros malesuada arcu sagittis, et lobortis lacus hendrerit.</p>
                                             @if (Auth::guest())
                                              {{-- USUARIOS INVITADOS --}}
                                             <a href="{{route('shopping-cart.membership')}}" class="btn btn-secondary"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Agregar al Carrito</a>
                                                @else
                                                   @if (is_null(Auth::user()->membership_id))
                                                      {{-- USUARIOS LOGUEADOS SIN MEMBRESÍA --}}
                                                      <a href="{{route('shopping-cart.membership')}}" class="btn btn-secondary"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Agregar al Carrito</a>
                                                   @else
                                                      @if (Auth::user()->membership_status == 1)
                                                         @if (!in_array($proxima->id, $misEventosArray))
                                                            @if (Auth::user()->streamings < Auth::user()->membership->streamings)
                                                               {{-- USUARIOS LOGUEADOS CON MEMBRESÍA MAYOR O IGUAL A LA SUBCATEGORÍA DEL EVENTO Y QUE NO TIENEN EL EVENTO AGENDADO AÚN--}}
                                                               <a href="{{route('schedule.event', [$proxima->id])}}" class="btn btn-success btn-block">Agendar</a>
                                                            @else
                                                               @if (Auth::user()->membership_id < 4)
                                                                  <a href="{{route('shopping-cart.store', [Auth::user()->membership_id+1, 'membresia', 'Mensual'])}}" class="btn btn-warning"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Aumentar Membresía</a>
                                                               @else
                                                                  <i class="fa fa-times text-danger" aria-hidden="true"></i> <span class="text-danger"> Límite de Eventos Superado</span>
                                                               @endif
                                                            @endif
                                                         @else
                                                            {{-- EL USUARIO YA TIENE EL EVENTO AGENDADO--}}
                                                            <a href="{{ route('timeliveEvent', $proxima->id) }}" class="btn btn-secondary btn-block">Ir Al Evento</a>
                                                         @endif
                                                      @else
                                                         <a href="{{route('shopping-cart.store', [Auth::user()->membership_id, 'membresia', 'Mensual'])}}" class="btn btn-danger"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Renovar Membresía</a>
                                                      @endif
                                                   @endif
                                                @endif
                                          </div>
                                    </div>
                              </div>
                        @endif
                     @endforeach
                  </div>
               </div>

               @if($total >= 4)
                  <div class="carousel-item">
                     <div class="row align-items-center justify-content-center">
                        @php $segundo =0; @endphp
                        @foreach($proximos as $proxima)
                           @php $segundo++; @endphp
                           @if($segundo >= 4)
                           <div class="col-md-3 mt-4">
                                    <div class="card-next-events card">
                                           @if ($proxima->miniatura == null)
                                           <img src="{{ asset('uploads/avatar/'.$proxima->mentor->avatar) }}" class="card-img-top img-prox-events" alt="...">
                                          @else
                                             <img src="{{ asset('uploads/images/miniatura/'.$proxima->miniatura) }}" class="card-img-top img-prox-events" alt="...">
                                          @endif
                                          <div class="card-body">
                                             <form action="{{route('timelive')}}" method="GET">
                                                @csrf
                                                <input id="sigEvent" name="sigEvent" type="hidden" value="{{ $proxima->id }}">
                                                <button class="btn text-left" type="submit" style=" color: #CF202F;"><h5 class="card-title font-weight-bold" style="color:#111329;">{{$proxima->title}}</h5></button>
                                             </form>
                                             <p class="card-text font-weight-bold mr-2" style="margin-top: -10px; font-size: 12px; color:#777777;">   <i class="far fa-calendar mr-2" style="font-size: 18px !important;padding: 5px;"> </i>
                                                {{\Carbon\Carbon::parse($proxima->date)->formatLocalized(' %d de %B')}}
                                                <i class="far fa-clock ml-2" style="font-size: 18px !important;padding: 5px;" aria-hidden="true"></i>{{\Carbon\Carbon::parse($proxima->time)->format('g:i a')}}
                                             </p>
                                             <p class="card-text" style="color:#707070; font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus maximus eros malesuada arcu sagittis, et lobortis lacus hendrerit.</p>
                                             @if (Auth::guest())
                                              {{-- USUARIOS INVITADOS --}}
                                             <a href="{{route('shopping-cart.membership')}}" class="btn btn-secondary"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Agregar al Carrito</a>
                                                @else
                                                   @if (is_null(Auth::user()->membership_id))
                                                      {{-- USUARIOS LOGUEADOS SIN MEMBRESÍA --}}
                                                      <a href="{{route('shopping-cart.membership')}}" class="btn btn-secondary"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Agregar al Carrito</a>
                                                   @else
                                                      @if (Auth::user()->membership_status == 1)
                                                         @if (!in_array($proxima->id, $misEventosArray))
                                                            @if (Auth::user()->streamings < Auth::user()->membership->streamings)
                                                               {{-- USUARIOS LOGUEADOS CON MEMBRESÍA MAYOR O IGUAL A LA SUBCATEGORÍA DEL EVENTO Y QUE NO TIENEN EL EVENTO AGENDADO AÚN--}}
                                                               <a href="{{route('schedule.event', [$proxima->id])}}" class="btn btn-success btn-block">Agendar</a>
                                                            @else
                                                               @if (Auth::user()->membership_id < 4)
                                                                  <a href="{{route('shopping-cart.store', [Auth::user()->membership_id+1, 'membresia', 'Mensual'])}}" class="btn btn-warning"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Aumentar Membresía</a>
                                                               @else
                                                                  <i class="fa fa-times text-danger" aria-hidden="true"></i> <span class="text-danger"> Límite de Eventos Superado</span>
                                                               @endif
                                                            @endif
                                                         @else
                                                            {{-- EL USUARIO YA TIENE EL EVENTO AGENDADO--}}
                                                            <a href="{{ route('timeliveEvent', $proxima->id) }}" class="btn btn-secondary btn-block">Ir Al Evento</a>
                                                         @endif
                                                      @else
                                                         <a href="{{route('shopping-cart.store', [Auth::user()->membership_id, 'membresia', 'Mensual'])}}" class="btn btn-danger"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Renovar Membresía</a>
                                                      @endif
                                                   @endif
                                                @endif
                                          </div>
                                    </div>
                              </div>
                           @endif
                        @endforeach
                     </div>
                  </div>
               @endif
            </div>

            @if($total >= 3)
               <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
               </a>
            @endif
         </div>
      @else
         <!--<div class="row">No se encontraron próximas transmisiones...</div>-->
      @endif
   </div>
   @endif
   <!--<div class="section-landing" style="background: #EFEFEF">
      <div class="col">
         <div class="section-title-landing" style="padding-bottom: 35px; text-align:center; color:#111329!important">TRANSMISIONES RECIENTES</div>
      </div>
      <div class="row">
         @if($finalizados->isNotEmpty())
            @foreach($finalizados as $fin)
               <div class="col-md-3" style="margin-top: 20px;">
                   @if($fin->miniatura == null)
                    <img src="{{ asset('uploads/avatar/'.$fin->mentor->avatar) }}" class="card-img-top" alt="..." >
                   @else
                     <img src="{{ asset('uploads/images/miniatura/'.$fin->miniatura) }}" class="card-img-top" alt="..." >
                   @endif
                  <div class="card-img-overlay" style="margin-left: 10px; margin-right: 10px;">
                     <h6 class="card-title">{{$fin->mentor->display_name}}</h6>
                  </div>

                  <div class="card-body" style="background-color: #2f343a;">
                     <h6 class="card-title" style="margin-top: -15px;">  {{$fin->title}}</h6>
                     <h6 style="font-size: 10px; margin-left: 20px; margin-top: -10px;">{{$fin->category->title}}</h6>
                  </div>
               </div>
            @endforeach
         @else
            <div class="row"></div>
         @endif
      </div>
   </div>-->

   <!--RECIENTES-->
   @if($finalizados->count() > 0)
   <div class="col-md-12 py-5" style="background-color: #EFEFEF;">
        <div class="section-title-landing new-courses-section-title mb-2" style="text-align: center;">
                <h3 style="font-weight: 800; color:#111329;">TRANSMISIONES RECIENTES</h3>
        </div>
        <div class="row align-items-center justify-content-center no-gutters">
            @php $contador=0; @endphp
            @foreach($finalizados as $finalizado)
               @php $contador++; @endphp
            <div class="containerscale col-md-3 no-gutters">
                    <div class="card" style="background-color: none!important;">
                              @if ($finalizado->miniatura == null)
                                 <img src="{{ asset('uploads/avatar/'.$finalizado->mentor->avatar) }}" class="card-img-top img-prox-events" alt="...">
                              @else
                                 <img src="{{ asset('uploads/images/miniatura/'.$finalizado->miniatura) }}" class="card-img-top img-prox-events" alt="...">
                              @endif
                            <!--<img src="{{ asset('images/nosotros/09-285x300.png') }}" alt="conexión">-->
                            <div class="card-img-overlay d-flex flex-column" style="top:40%;">
                                    <h5 class="text-white text-uppercase">{{$finalizado->title}}</h5>
                                    <h6 class="text-white text-uppercase">{{$finalizado->mentor->display_name}}</h6>
                                    <h6 class="text-white my-auto aumento"><i class="fab fa-youtube text-success" style="font-size: 20px!important;"></i>&nbsp {{$finalizado->duration}}</h6>
                            </div>
                    </div>
            </div>
            @if($contador == 3 || $contador == 6 || $contador == 9)
            <div class="w-100"></div>
            @endif
            @endforeach
        </div>
</div>
@endif

   <!--END RECIENTES-->

<!--SER PARTE-->
<div class="container-fluid img-background-quiero py-5">
   <div class="row align-items-center justify-content-center">
         <div class="col-md-6 py-5">
               <h2 class="text-white font-weight-bold">APRENDE DE LOS MEJORES DEL MERCADO QUE PUEDEN AYUDARTE A TOMAR MEJORES DECISIONES DE INVERSIÓN</h2>
            </div>
      <div class="col-md-4 text-center py-5">
       <a href="#" class="btn btn-danger btn-lg">QUIERO SER PARTE</a>
      </div>
   </div>

</div>
<!--SER PARTE END-->

@endsection
