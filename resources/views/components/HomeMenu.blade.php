

<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark fuentepequenia" style="font-family: Century Gothic;">
    <div class="container-fluid">
        <a class="navbar-brand" href="http://127.0.0.1:8000/home">
            
            <img src="/imgs/icon.ico" class="logo">
  
            {{ config('app.name', 'Visius') }}
            
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span> 
        </button>
  
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
  
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item coloropcion">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif
  
                    @if (Route::has('register'))
                        <li class="nav-item coloropcion">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else                       
            

            {{-- admi  --}}
                @if(Auth::user()->role=== 'Administrador') 

                {{-- <li class="nav-item coloropcion">
                    <a class="nav-link active" href="/Dasboard">Dashboard</a>
                </li> --}}
                {{-- Admi --}}
                
                <li class="nav-item coloropcion">
                    <a class="nav-link active" href="/readUsers">Usuarios</a>
              </li>

              <li class="nav-item coloropcion">
                  <a class="nav-link active" href="/empleado/show">Empleados</a>
              </li>
               

              <li class="nav-item coloropcion">
                  <a class="nav-link active" href="/area/show">Areas</a>
              </li>

                @endif

                  {{-- supervisor --}}
                  @if(Auth::user()->role== 'Supervisor') 

                <li class="nav-item coloropcion">
                    <a class="nav-link active" href="/ShowAllEmpleados">Empleados</a>
                </li>
                <li class="nav-item coloropcion">
                    <a class="nav-link active" href="/tarea/show">Tareas</a>
                </li>
                <li class="nav-item coloropcion">
                    <a class="nav-link active" href="/tarea/show/asignar">Tarea Asignadas</a>
                </li>

                @endif

                {{-- Empleado --}}
                @if(Auth::user()->role== 'Empleado') 

                <li class="nav-item coloropcion">
                    <a class="nav-link active" href="/TareasShowEm">Mis Tareas</a>
                </li>
                @endif
                
                </div>
            </ul>
  
            
            <div class="d-flex" role="search">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="font-family: century gothic;">
              
                <li class="nav-item dropdown coloropcion">
                    <a id="navbarDropdown" class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->role}}
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item fuentepequenia" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" >
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>
    @endguest
  </ul>