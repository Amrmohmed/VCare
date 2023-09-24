 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="{{ route('dashboard.index') }}" class="brand-link">
         <img src="{{ asset('admin') }}/dist/img/clinic-1.png" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3" style="opacity:1">
         <span class="brand-text font-weight-light">HEALING</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar ">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="{{ asset('admin/dist/img/avatar5.png') }}" class="img-circle elevation-2" alt="User Image">
             </div>
             <div class="info">
                 <a href="#" class="d-block">{{ Auth::user()->name }}</a>
             </div>
         </div>

         <!-- SidebarSearch Form -->


         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                 <li class="nav-item">
                     <a href="{{ route('dashboard.index') }}" class="nav-link">
                         <i class="nav-icon fas fa-th"></i>
                         <p>
                             Dashboard
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="#" class="nav-link ">
                         <i class=" nav-icon fas fa-chart-pie"></i>
                         <p>
                             Majors
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('majors.index') }}" class="nav-link active">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Show All Major</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('major.create') }}" class="nav-link active">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Create New Major</p>
                             </a>
                         </li>
                     </ul>
                 </li>


                 <li class="nav-item menu-close">
                     <a href="#" class="nav-link  ">
                         <i class="nav-icon fa fa-suitcase"></i>
                         <p>
                             Doctors
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('doctors.index') }}" class="nav-link active">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Show All Doctors</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('doctor.create') }}" class="nav-link active">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Create New Doctors</p>
                             </a>
                         </li>
                     </ul>
                 </li>

                 <li class="nav-item menu-close">
                     <a href="" class="nav-link ">
                         <i class="nav-icon fa fa-users"></i>
                         <p>
                             Users
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('user.index') }}" class="nav-link active">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Show All User</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('user.create') }}" class="nav-link active">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Create New User</p>
                             </a>
                         </li>
                     </ul>
                 </li>

                 <li class="nav-item menu-close">
                     <a href="#" class="nav-link ">
                         <i class="nav-icon fa fa-cart-plus"></i>
                         <p>
                             Booking
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('booking.index') }}" class="nav-link active">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Show All Booking</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('booking.create') }}" class="nav-link active">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Create New Booking</p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <li class="nav-item menu-close">
                     <a href="#" class="nav-link ">
                         <i class="nav-icon fa fa-file-contract"></i>
                         <p>
                             Contact us
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('contact.index') }}" class="nav-link active">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Show All Contact</p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <li class="nav-item">

                     <a class="nav-link" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                         <i class="nav-icon far fa-circle text-danger"></i>
                         <p class="text">Logout</p>
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                     </form>

                 </li>

             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>
