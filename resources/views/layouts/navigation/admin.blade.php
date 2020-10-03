<div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
        <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
        <a href="#" class="d-block">{{Auth::user()->name}}</a>
    </div>
</div>
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="{{route('admin.dashboard')}}" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Home
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{route('department.index')}}" class="nav-link">
                <i class="nav-icon fas fa-archway"></i>
                <p>
                    Unidades Academicas
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('career.index')}}" class="nav-link">
                <i class="nav-icon fas fa-clipboard"></i>
                <p>
                    Carreras
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('course.index')}}" class="nav-link">
                <i class="nav-icon fas fa-clipboard"></i>
                <p>
                    Materias
                </p>
            </a>
        </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Espacios Aulicos
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('building.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                            Edificios
                            
                        </p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('classroom.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                            Aulas
                            
                        </p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item has-treeview">
                 <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                            Aulas
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>Level 3</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>Level 3</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>Level 3</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                            Materias
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>Level 3</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>Level 3</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>Level 3</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</nav>