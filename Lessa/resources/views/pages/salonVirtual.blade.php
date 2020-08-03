@extends('layouts.app', ['activePage' => 'salon', 'titlePage' => __(' ')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title">Configuración de Salon Virtual</h4>
        <p class="card-category"> </p>
      </div>
      <div class="card-body">
        <div id="salon">

        <div class=" row">

        <div class="col-lg-3 col-md-4 col-sm-5">
          <div class="card card-stats ">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i><img style="width:70px" src="{{ asset('material') }}/imgSalon/salonvirtual.png"></i>
              </div>
              <a class="card-category" href="{{ route('salonRegistrado') }}"><h4 class=" text-center "> + Nuevo Salon Virtual</h4></a>
              <!-- <h3 class="card-title">$34,245</h3> -->
            </div>
      <div class="card-footer">
              <div class="stats">
                <!-- <i class="material-icons">date_range</i> Last 24 Hours -->
              </div>
            </div> 
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-5">
          <div class="card card-stats ">
            <div class="card-header card-header-info card-header-icon">
              <div class="card-icon">
                <i><img style="width:70px" src="{{ asset('material') }}/imgSalon/unidades.png"></i>
              </div>
              <a class="card-category" href="{{ route('salonRegistrado') }}"><h4 class=" text-center ">Configurar Unidades </h4> </a>
              
            </div>
      <div class="card-footer">
              <div class="stats">
            
              </div>
            </div> 
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-5">
          <div class="card card-stats ">
            <div class="card-header card-header-rose card-header-icon">
              <div class="card-icon">
                <i><img style="width:70px" src="{{ asset('material') }}/imgSalon/lecciones.png"></i>
              </div>
              <a class="card-category" href="{{ route('salonRegistrado') }}"><h4 class=" text-center ">Configurar Lecciones </h4> </a>
             
            </div>
      <div class="card-footer">
              <div class="stats">
              
              </div>
            </div> 
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-5">
          <div class="card card-stats ">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i><img style="width:70px" src="{{ asset('material') }}/imgSalon/senias1.png"></i>
              </div>
              <a class="card-category" href="{{ route('salonRegistrado') }}"><h4 class=" text-center ">Configurar Señas </h4> </a>
             
            </div>
      <div class="card-footer">
              <div class="stats">
   
              </div>
            </div> 
          </div>
        </div>

          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection