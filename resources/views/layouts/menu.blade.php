<h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Inicio <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    </ul>
                  </li>
                  @if(Auth::user()->rol->rol == 'Administrador')
                 <!--  <li><a><i class="fa fa-user"></i>Género<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('gender.index')}}">Listado</a></li>                      
                      <li><a href="{{ route('gender.create')}}">Nuevo</a></li>
                    </ul>
                  </li> -->
                    <!-- Bloquea a el rol prof o alumno y  le muestra otra cosa a Admin-->
                      <!-- <li><a><i class="fa fa-user"></i>Carreras<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('carrera.index')}}">Listado</a></li>                      
                      
                    </ul>
                  </li> -->
                   <!-- Bloquea a el rol prof o alumno y le muestra otra cosa a Admin-->
                   <!-- <li><a><i class="fa fa-user"></i>Roles<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('rol.index')}}">Listado</a></li>                      
                    </ul>
                  </li> -->
                   <!-- Bloquea a el rol prof o alumno y le muestra otra cosa a Admin-->
                   <!-- <li><a><i class="fa fa-user"></i>General<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('general.index')}}">Listado</a></li>                      
                    </ul>
                  </li> -->
                  <li><a><i class="fa fa-users"></i>Administrar Usuario<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('usuario.index')}}">Listado</a></li>
                      <li><a href="{{ route('administrador.index')}}">Administradores</a></li>
                      <li><a href="{{ route('maestro.index')}}">Profesores</a></li>
                      <li><a href="{{ route('alumno.index')}}">Alumnos</a></li>
                    </ul>
                  </li>    
                  <li><a><i class="fa fa-clock-o"></i>Historial<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('recientes.index')}}">Recientes</a></li>
                      <li><a href="#">Favoritos</a></li>
                    </ul>
                  </li> 
                  <li><a><i class="fa fa-folder"></i>Gestion de Recursos<span class="fa fa-chevron-down"></span></a>
                     <ul class="nav child_menu">
                      <!-- <li><a href="{{ route('usuario.index')}}">Listado</a></li>  -->
                      <li><a href="{{ route('libros.index')}}">Libros</a></li>
                      <li><a href="{{ route('memorias.index')}}">Memorias</a></li>
                      <li><a href="{{ route('articulos.index')}}">Articulos</a></li>
                      <li><a href="{{ route('guias.index')}}">Guias estudiantiles</a></li>
                    </ul>
                  </li>
                  @endif
                  @if(Auth::user()->rol->rol == 'Maestro')
                  <li><a><i class="fa fa-user"></i>Opcion de docente<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Listado</a></li>                      
                    </ul>
                  </li>
                  @endif
                  @if(Auth::user()->rol->rol == 'Alumno')
                  <li><a><i class="fa fa-user"></i>Opcion de alumno<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Listado</a></li>                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-user"></i>Opciones<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Favoritos</a></li>     
                      <li><a href="#">Historial</a></li>                      
                    </ul>
                  </li>
                  @endif
                </ul>