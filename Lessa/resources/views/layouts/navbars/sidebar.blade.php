<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/fondo1.png">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <!-- deberia de ir nombre de usuario  -->
       <a class=" logo-normal simple-text Logoapp.png content-center" href="{{ route('home') }}"> 
        <i><img style="width:225px"  src="{{ asset('material') }}/img/logoapp.png"></i>
      <!-- {{ __('Comunicate Lessa') }} -->
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i><img style="width:25px" src="{{ asset('material') }}/img/home.png"></i>
            <p>{{ __('Inicio') }}</p>
        </a>
      </li>
     <!--  <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('material') }}/img/apple.png"></i>
          <p>{{ __('Docentes') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}"> -->
                <!-- <span class="sidebar-mini"> UP </span> -->
             <!--    <i><img style="width:25px" src="{{ asset('material') }}/img/estudiante.png"></i>
                <span class="sidebar-normal">{{ __('Estudiantes') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('Lista de Estudiantes ') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li> -->
      <li class="nav-item{{ $activePage == 'docentes' ? ' active' : '' }}">
      <a class="nav-link" href="{{ route('docentes') }}"> 
        <i><img style="width:25px" src="{{ asset('material') }}/img/apple.png"></i>
          <!-- <i class="material-icons">Usuarios</i> -->
            <p>{{ __('Docentes') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'estudiantes' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('estudiantes') }}">
        <i><img style="width:25px" src="{{ asset('material') }}/img/estudiante.png"></i>
          <!-- <i class="material-icons">Usuarios</i> -->
            <p>{{ __('Estudiantes') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'lista' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('lista') }}">
        <i><img style="width:25px" src="{{ asset('material') }}/img/list.png"></i>
          <!-- <i class="material-icons">Usuarios</i> -->
            <p>{{ __('Lista de Estudiantes') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'usuarios' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('usuarios') }}">
        <i><img style="width:25px" src="{{ asset('material') }}/img/user.png"></i>
          <!-- <i class="material-icons">Usuarios</i> -->
            <p>{{ __('Usuarios') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'salon' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('salon') }}">
        <i><img style="width:25px" src="{{ asset('material') }}/img/salon.png"></i>
         
            <p>{{ __('Salon Virtual') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'examenes' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('examenes') }}">
        <i><img style="width:25px" src="{{ asset('material') }}/img/examen.png"></i>
          <p>{{ __('Examenes') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'reporte' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('reporte') }}">
        <i><img style="width:25px" src="{{ asset('material') }}/img/reportes.png"></i>
            <p>{{ __('Reportes') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'historial' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('historial') }}">
        <i><img style="width:25px" src="{{ asset('material') }}/img/historial.png"></i>
          <p>{{ __('Historial') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'ayuda' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('ayuda') }}">
        <i><img style="width:25px" src="{{ asset('material') }}/img/ayuda.png"></i>
          <p>{{ __('Ayuda') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>