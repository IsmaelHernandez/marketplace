<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background: #95A5A6;" >

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-shopping-cart"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Reservas<sup>1.0</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('home')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    {{-- <li class="nav-item">
        <a class="nav-link collapsed text-uppercase" href="users" data-toggle="collapse" data-target="#users"
            aria-expanded="true" aria-controls="users">
            <i class="fas fa-bars"></i>
            <span>Usuarios</span>
        </a>
        <div id="users" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">usuarios</h6>
                <a class="collapse-item" href="">Usuarios</a>
            </div>
        </div>
    </li> --}}

    <li class="nav-item">

        <a class="nav-link collapsed text-uppercase" href="productos" data-toggle="collapse" data-target="#productos"
            aria-expanded="true" aria-controls="productos">
            <i class="fas fa-bars"></i>
            <span>Productos</span>
        </a>

        <div id="productos" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Productos</h6>
                <a class="collapse-item" href="{{route('productos.index')}}">Productos</a>
            </div>
        </div>
    </li>
    

   
</ul>