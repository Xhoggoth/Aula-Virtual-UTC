<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Menu Principal UTC</span>
                </li>

                @if (Session::get('role_name') === 'Admin' || Session::get('role_name') === 'Super Admin')
                <li class="{{set_active(['setting/page'])}}">
                    <a href="{{ route('setting/page') }}">
                        <i class="fas fa-cog"></i> 
                        <span>Configuraciones</span>
                    </a>
                </li>
                @endif

                <li class="submenu {{set_active(['home','teacher/dashboard','student/dashboard'])}}">
                    <a href="#"><i class="feather-grid"></i>
                        <span> Panel UTC</span> 
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="{{ route('home') }}" class="{{set_active(['home'])}}">Panel Inicio</a></li>

                        @if (Session::get('role_name') === 'Teachers')
                        <li><a href="{{ route('teacher/dashboard') }}" class="{{set_active(['teacher/dashboard'])}}">Panel Maestros</a></li>
                        @endif

                        @if (Session::get('role_name') === 'Student')
                        <li><a href="{{ route('student/dashboard') }}" class="{{set_active(['student/dashboard'])}}">Panel Alumnos</a></li>
                        @endif
                    </ul>
                </li>

                @if (Session::get('role_name') === 'Admin' || Session::get('role_name') === 'Super Admin')
                <li class="submenu {{set_active(['list/users'])}} {{ (request()->is('view/user/edit/*')) ? 'active' : '' }}">
                    <a href="#"><i class="fas fa-shield-alt"></i>
                        <span>Gestión de usuarios</span> 
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="{{ route('list/users') }}" class="{{set_active(['list/users'])}} {{ (request()->is('view/user/edit/*')) ? 'active' : '' }}">Lista de usuarios</a></li>
                    </ul>
                </li>
                @endif

                @if (Session::get('role_name') === 'Teachers')
                <li class="submenu {{set_active(['student/list','student/grid','student/add/page'])}} {{ (request()->is('student/edit/*')) ? 'active' : '' }} {{ (request()->is('student/profile/*')) ? 'active' : '' }}">
                    <a href="#"><i class="fas fa-graduation-cap"></i>
                        <span> Alumnos</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="{{ route('student/list') }}"  class="{{set_active(['student/list','student/grid'])}}">Lista de alumnos</a></li>
                        <li><a href="#" class="{{set_active(['student/add/page'])}}">Añadir estudiante</a></li>
                        <!-- <li><a href="{{ route('student/add/page') }}" class="{{set_active(['student/add/page'])}}">Añadir estudiante</a></li> -->
                        <li><a href="" class="{{ (request()->is('student/edit/*')) ? 'active' : '' }}">Editar estudiante</a></li>
                        <li><a href=""  class="{{ (request()->is('student/profile/*')) ? 'active' : '' }}">Ver estudiante</a></li>
                    </ul>
                </li>
                @endif

                @if (Session::get('role_name') === 'Admin' || Session::get('role_name') === 'Super Admin')
                <li class="submenu  {{set_active(['teacher/add/page','teacher/list/page','teacher/grid/page','teacher/edit'])}} {{ (request()->is('teacher/edit/*')) ? 'active' : '' }}">
                    <a href="#"><i class="fas fa-chalkboard-teacher"></i>
                        <span> Maestros</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="#" class="{{set_active(['teacher/list/page','teacher/grid/page'])}}">Lista de maestros</a></li>
                        <!-- <li><a href="{{ route('teacher/list/page') }}" class="{{set_active(['teacher/list/page','teacher/grid/page'])}}">Lista de maestros</a></li> -->
                        <li><a href="teacher-details.html">Ver maestro</a></li>
                        <li><a href="#" class="{{set_active(['teacher/add/page'])}}">Añadir maestro</a></li>
                        <!-- <li><a href="{{ route('teacher/add/page') }}" class="{{set_active(['teacher/add/page'])}}">Añadir maestro</a></li> -->
                        <li><a class="{{ (request()->is('teacher/edit/*')) ? 'active' : '' }}">Editar maestro</a></li>
                    </ul>
                </li>
                <li class="submenu {{set_active(['department/add/page','department/edit/page'])}}">
                    <a href="#"><i class="fas fa-building"></i>
                        <span> Departamentos UTC</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="#" class="{{set_active(['department/list/page'])}}">Lista de departamentos</a></li>
                        <li><a href="#" class="{{set_active(['department/add/page'])}}">Añadir departamento</a></li>
                        <li><a href="#" class="{{set_active(['department/edit/page'])}}">Editar departamento</a></li>
                        <!-- <li><a href="{{ route('department/list/page') }}" class="{{set_active(['department/list/page'])}}">Lista de departamentos</a></li>
                        <li><a href="{{ route('department/add/page') }}" class="{{set_active(['department/add/page'])}}">Añadir departamento</a></li>
                        <li><a href="{{ route('department/edit/page') }}" class="{{set_active(['department/edit/page'])}}">Editar departamento</a></li> -->
                    </ul>
                </li>
                @endif

                <li class="submenu">
                    <a href="#"><i class="fas fa-book-reader"></i>
                        <span> Materias UTC</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        @if (Session::get('role_name') === 'Student')
                        <li><a href="subjects.html">Lista de materias</a></li>
                        @endif

                        @if (Session::get('role_name') === 'Teachers')
                        <li><a href="add-subject.html">Añadir materia</a></li>
                        @endif

                        @if (Session::get('role_name') === 'Teachers')
                        <li><a href="edit-subject.html">Editar materia</a></li>
                        @endif
                    </ul>
                </li>
                <!-- <li class="menu-title">
                    <span>Administración</span>
                </li> -->

                @if (Session::get('role_name') === 'Admin' || Session::get('role_name') === 'Super Admin')
                <li class="submenu">
                    <a href="#"><i class="fas fa-file-invoice-dollar"></i>
                        <span> Gestión UTC</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="fees-collections.html">Cobro de Fichas</a></li>
                        <li><a href="expenses.html">Gastos</a></li>
                        <li><a href="salary.html">Salarios</a></li>
                        <li><a href="add-fees-collection.html">Añadir Ficha</a></li>
                        <li><a href="add-expenses.html">Añadir Gasto</a></li>
                        <li><a href="add-salary.html">Añadir Salarios</a></li>
                    </ul>
                </li>
                @endif

                <li>
                    <a href="holiday.html"><i class="fas fa-holly-berry"></i> <span>Clandario</span></a>
                </li>
                <li>
                    <a href="fees.html"><i class="fas fa-comment-dollar"></i> <span>Fichas</span></a>
                </li>
                <li>
                    <a href="exam.html"><i class="fas fa-clipboard-list"></i> <span>Lista de examenes</span></a>
                </li>
                <li>
                    <a href="event.html"><i class="fas fa-calendar-day"></i> <span>Eventos</span></a>
                </li>
                <li>
                    <a href="time-table.html"><i class="fas fa-table"></i> <span>Horario</span></a>
                </li>
                <li>
                    <a href="library.html"><i class="fas fa-book"></i> <span>Biblioteca UTC</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>