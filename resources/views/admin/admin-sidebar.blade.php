@section('sidebar')
<style type="text/css">
  .brand-link{
    background-color: #fff;
  }
  .brand-link span {
    color: #21618c;
  }
  .brand-link .brand-image { 
    margin-left: -0.2rem!important; 
  }
  .dataTable > thead > tr > th[class*="sort"]:before,
  .dataTable > thead > tr > th[class*="sort"]:after {
    content: "" !important;
  }

</style>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{URL::to('dashboard')}}" class="brand-link">
    <img src="data:image/jpeg;base64,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" alt="AdminLTE Logo" class="brand-image img-circle elevation-0" style="">
    <span class="brand-text font-weight-bold">THDC ADMIN</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <!-- <div class="image">
        <img src="" class="img-circle elevation-2" alt="User Image">
      </div> -->
      <div class="info">
        <a href="https://evcharging-admin.powerlogixtech.com/my-profile" class="d-block">Hello {{auth()->user()->name}}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="{{URL::to('/admin/dashboard')}}" class="nav-link" style="font-size: 14px">
            <i class="fab fa-dashcube"></i>&nbsp;&nbsp;
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{URL::to('/admin/doctors-list')}}" class="nav-link" style="font-size: 14px">
            <i class="fa fa-user-md"></i>&nbsp;&nbsp;
            <p>
              Doctors List
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{URL::to('/admin/employee-list')}}" class="nav-link" style="font-size: 14px">
            <i class="fa fa-user"></i>&nbsp;&nbsp;
            <p>
              Employes List
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="font-size: 14px">
            <!-- <i class="nav-icon fas fa-circle"></i>&nbsp;&nbsp; -->
            <i class="fa fa-hdd"></i>&nbsp;&nbsp;
            <p>
              Masters
              <i class="right fas fa-angle-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview"> 
            <li class="nav-item">
              <a href="#" class="nav-link" style="font-size: 14px">
               <i class="fa fa-location-arrow"></i>&nbsp;&nbsp;
               <p>
                 Unit Master
                 <i class="right fas fa-angle-right"></i>
               </p>
             </a>
             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{URL::to('create-unit')}}" class="nav-link" style="font-size: 14px">
                  <i class="fa fa-angle-double-right"></i>&nbsp;&nbsp;
                  <p>Create Unit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('all-unit')}}" class="nav-link" style="font-size: 14px">
                  <i class="fa fa-angle-double-right"></i>&nbsp;&nbsp;
                  <p>Show All Unit</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </li>
    </ul>

    <!-- Gift Cards details -->
  </nav>
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>
@endsection('sidebar')