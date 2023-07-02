 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="{{url('admin/dashboard')}}" class="brand-link">
         <img src="{{asset('main')}}/images/logo_mavereck.png" alt="Logo" class="brand-image" style="opacity: .8"> <span class="brand-text font-weight-light" style="word-wrap: break-word !important;">ADMIN</span>
     </a>
     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
             </div>
             <div class="info">
                 <a href="#" class="d-block"><b>Hi, {{ Auth::user()->name }}</b></a>
             </div>
         </div>
         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <li class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                 <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                     <li class="nav-item">
                         <a href="{{route('admin.dashboard')}}" class="nav-link" id="dashboard">
                             <i class="far fa-circle nav-icon"></i>
                             <p>Dashboard</p>
                         </a>
                     </li>
                 </ul>
                 <ul class="nav nav-pills nav-sidebar flex-column" data-bs-widget="treeview" role="menu" data-bs-accordion="false">
                     <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                     <li class="nav-item menu-open">
                         <a href="{{route('admin.dashboard')}}" class="nav-link" id="nav_manage">
                             <i class="nav-icon fas fa-tachometer-alt"></i>
                             <p>
                                 Manage
                                 <i class="right fas fa-angle-left"></i>
                             </p>
                         </a>
                         <ul class="nav nav-treeview">
                             <li class="nav-item">
                                 <a href="{{route('admin.product')}}" class="nav-link" id="prd">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>Products</p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="{{route('admin.category')}}" class="nav-link" id="cat">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>Category</p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="{{url('admin/contact')}}" class="nav-link" id="contact">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>Contact</p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="{{url('admin/feedback')}}" class="nav-link" id="feedback">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>Feedback</p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="{{route('accounts')}}" class="nav-link" id="account">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>Account</p>
                                 </a>
                             </li>
                         </ul>
                     </li>
                 </ul>
             </li>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>