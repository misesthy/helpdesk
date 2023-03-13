<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard-Faveo Auto Update Script</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins_manager/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../plugins_manager/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins_manager/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins_manager/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist_manager/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins_manager/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins_manager/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins_manager/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    
  <link rel="stylesheet" href="../CSS/style1.css">
</head>
    
<body class="hold-transition sidebar-mini layout-fixed">
 <div class="wrapper">
     
     
     
   
         

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
        
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Find records..." aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
      

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        
        
      <!-- News Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-rss text-orange"></i>  
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <div class="media">
              <div class="media-body">
                <h2 class="dropdown-item-title" style="text-align: center">
                    <b>News</b>
                </h2> 
              </div>
            </div>
            <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <div class="media">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  
                </h3>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
          </a>
          <div class="dropdown-divider"></div> 
          <a href="#" class="dropdown-item">
            <div class="media">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                
                </h3>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <div class="media">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                
                </h3>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i>4 Hours Ago</p>
              </div>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer" >View all news</a>
        </div>
      </li>
        
        
      <!-- Help and support Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-question-circle text-red"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="media">
              <div class="media-body">
                <h2 class="dropdown-item-title" style="text-align: center">
                    <b>Help & Support</b>
                </h2>
                
              </div>
            </div>
          <div class="dropdown-divider"></div>
          <a href="helpsection.html" class="dropdown-item">
            <i class="fas fa-info-circle mr-1"></i> Help section
            
          </a>
          <div class="dropdown-divider"></div>
          <a href="https://www.phpmillion.com/forums/" class="dropdown-item">
            <i class="far fa-comments mr-1"></i>Support Forum
          </a>
 
        </div>
      </li>
        
        
        <!-- Maintenance drop down -->
        <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-power-off text-yellow"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="media">
              <div class="media-body">
                <h2 class="dropdown-item-title" style="text-align: center">
                    <b>Maintenance</b>
                </h2> 
              </div>
            </div>
          <div class="dropdown-divider"></div>
          <a href="softwareupdate.html" class="dropdown-item">
            <i class="fas fa-cloud-download-alt mr-1"></i>Software updates
          </a>
          <div class="dropdown-divider"></div>
          <a href="updatelicense.html" class="dropdown-item">
          <i class="fas fa-sync-alt mr-1"></i>Update license
          </a>
          <div class="dropdown-divider"></div>
            <a href="uninstalllicense.html" class="dropdown-item">
                <i class="fas fa-unlock mr-1"></i> Uninstall License.  
          </a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
          
        <!-- profile -->
        
        <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-user-cog text-aqua"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="media">
              <div class="media-body">
                <h2 class="dropdown-item-title" style="text-align: center">
                    <b>My Profile</b>
                </h2> 
              </div>
            </div>
          <div class="dropdown-divider"></div>
          <a href="editprofile.html" class="dropdown-item">
            <i class="fas fa-user-edit mr-1"></i> Edit Profile  
          </a>
          <div class="dropdown-divider"></div>
          <a href="Login.html" class="dropdown-item">
            <i class="fas fa-sign-out-alt mr-1"></i>Logout
          </a>
          <div class="dropdown-divider"></div>
        </div>
      </li>  
    </ul>
  </nav>
  <!-- /.navbar -->

    
    
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.html" class="brand-link" style="text-align: center;">
      <span class="brand-text font-weight-light">Faveo <b>Auto</b> Update Script</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!--<div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <p>Manage your...</p>
        </div>
      </div>--> 

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="index.html" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
                   <p>Dashboard</p>
            </a>
            <!--<ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>            
             </ul> -->

          </li>
            
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cart-arrow-down"></i>
              <p>
                Products
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Addnewprod.html" class="nav-link">
                  <i class="nav-icon fas fa-angle-right"></i>
                  <p>Add New Products</p>
                </a>
              </li>
                <li class="nav-item">
                <a href="viewproducts.html" class="nav-link">
                  <i class="nav-icon fas fa-angle-right"></i>
                  <p>View All Products</p>
                </a>
              </li>
            </ul>
          </li>
            
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-code-branch "></i>
              <p>
                Versions
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Addnewversion.html" class="nav-link">
                  <i class="nav-icon fas fa-angle-right"></i>
                  <p>Add New Versions</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="viewnewversion.html" class="nav-link">
                 <i class="nav-icon fas fa-angle-right"></i>
                  <p>View All Versions</p>
                </a>
              </li>
            </ul>
          </li>
            
            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-download"></i>
              <p>
                Installations
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="viewinstall.html" class="nav-link">
                 <i class="nav-icon fas fa-angle-right"></i>
                  <p>View Installations</p>
                </a>
              </li>
            </ul>
          </li>
            
            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-phone"></i>
              <p>
                Callbacks
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="viewcallback.html" class="nav-link">
                 <i class="nav-icon fas fa-angle-right"></i>
                  <p>View Callbacks</p>
                </a>
              </li>
            </ul>
          </li>
            
            
             <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-bar"></i>
              <p>
                Reports
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="viewUpdatereport.html" class="nav-link">
                  <i class="nav-icon fas fa-angle-right"></i>
                  <p>View Update Reports</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="viewsystemreports.html" class="nav-link">
                 <i class="nav-icon fas fa-angle-right"></i>
                  <p>View System Reports</p>
                </a>
              </li>
                <li class="nav-item">
                <a href="viewcrackingreports.html" class="nav-link">
                 <i class="nav-icon fas fa-angle-right"></i>
                  <p>View Cracking Reports</p>
                </a>
              </li>
            </ul>
          </li>
            
         <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-flag"></i>
              <p>
                Server Notifications
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="customnotif.html" class="nav-link">
                  <i class="nav-icon fas fa-angle-right"></i>
                  <p>Customize Notifications</p>
                </a>
              </li>
            </ul>
          </li>
            
            
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Software Settings
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="generalset.html" class="nav-link">
                  <i class="nav-icon fas fa-angle-right"></i>
                  <p>General Settings</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="advancedset.html" class="nav-link">
                  <i class="nav-icon fas fa-angle-right"></i>
                  <p>Advanced Settings</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="securityset.html" class="nav-link">
                  <i class="nav-icon fas fa-angle-right"></i>
                  <p>Security Settings</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Systemcleanup.html" class="nav-link">
                  <i class="nav-icon fas fa-angle-right"></i>
                  <p>System Cleanup Settings</p>
                </a>
              </li>
            </ul>
          </li>
            
             <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-key"></i>
              <p>
                API Keys
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Addapi.html" class="nav-link">
                  <i class="nav-icon fas fa-angle-right"></i>
                  <p>Add New API Key</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="viewapi.html" class="nav-link">
                 <i class="nav-icon fas fa-angle-right"></i>
                  <p>View API Key</p>
                </a>
              </li>
            </ul>
          </li>
            
            
            
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-ban"></i>
              <p>
                Banned Hosts
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Banned.html" class="nav-link">
                  <i class="nav-icon fas fa-angle-right"></i>
                  <p>Add New Banned Host</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="viewbanned.html" class="nav-link">
                  <i class="nav-icon fas fa-angle-right"></i>
                  <p>View Banned Hosts</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-wrench"></i>
              <p>
                Extra Tools
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="configen.html" class="nav-link">
                   <i class="nav-icon fas fa-angle-right"></i>
                  <p>Configuration Generator</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
        
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
    

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard/Faveo <b>Auto</b> Update Script</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>Products:0</h3>

                <p>Active:0</p>
              </div>
              <div class="icon">
                <i class="fas fa-cart-arrow-down"></i>
              </div>
              <a href="viewproducts.html" class="small-box-footer">View all <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>Versions:0</h3>

                <p>Active:0</p>
              </div>
              <div class="icon">
                <i class="fas fa-code-branch"></i>
              </div>
              <a href="viewnewversion.html" class="small-box-footer">View all <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>Installations:0</h3>

                <p>Active:0</p>
              </div>
              <div class="icon">
              <i class="fas fa-download"></i>
              </div>
              <a href="viewinstall.html" class="small-box-footer">View all <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>Callbacks:0</h3>

                <p>Active:0</p>
              </div>
              <div class="icon">
                <i class="fas fa-phone"></i>
              </div>
              <a href="viewcallback.html" class="small-box-footer">View all <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
          <div class="row">
          <div class="col-xs-6  col-lg-6">
              <div class="box box-primary">
                  <div class="box-header with-border">
                      <h3 class="box-title">Latest Products</h3>
                  </div>
                  <div class="box-body">
                      <div class="table-responsive">
                          <table class="table no-margin">
                              <thead>
                                  <tr class="bg-blue">
                                      <th>Product</th>
                                      <th>SKU</th>
                                      <th>Versions</th>
                                      <th>Installations</th>
                                      <th>Status</th>
                                  </tr></thead>
                              <tbody></tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
              <div class="col-xs-6 col-lg-6">
                  <div class="box box-success">
                      <div class="box-header with-border">
                          <h3 class="box-title">Latest Versions</h3>
                      </div>
                      <div class="box-body">
                          <div class="table-responsive">
                              <table class="table no-margin">
                                  <thead>
                                      <tr class="bg-green">
                                          <th>Version</th>
                                          <th>Date</th>
                                          <th>Expiration Date</th>
                                          <th>Status</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-xs-6 col-lg-6">
                  <div class="box box-warning">
                      <div class="box-header with-border">
                          <h3 class="box-title">Latest Installations</h3>
                      </div>
                      <div class="box-body">
                          <div class="table-responsive">
                              <table class="table no-margin">
                                  <thead>
                                      <tr class="bg-yellow">
                                          <th>Version</th>
                                          <th>IP</th>
                                          <th>Date</th>
                                          <th>Status</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xs-6 col-lg-6">
                  <div class="box box-danger">
                      <div class="box-header with-border">
                          <h3 class="box-title">Latest Callbacks</h3>
                      </div><div class="box-body">
                      <div class="table-responsive">
                          <table class="table no-margin">
                              <thead>
                                  <tr class="bg-red">
                                      <th>Version</th>
                                      <th>Type</th>
                                      <th>IP</th>
                                      <th>Date</th>
                                      <th>Status</th>
                                  </tr>
                              </thead>
                              <tbody>
                              </tbody>
                          </table>
                      </div>
                      </div>
                  </div>
              </div>
          </div>
          
          <div class="row">
              <div class="col-xs-6 col-lg-6">
                  <div class="box box-info">
                      <div class="box-header with-border">
                          <h3 class="box-title">Latest Product Reports</h3>
                      </div>
                      <div class="box-body">
                          <div class="table-responsive">
                              <table class="table no-margin">
                                  <thead>
                                      <tr class="table-info">
                                          <th>Report</th>
                                          <th>Date</th>
                                          <th>Status</th>
                                      </tr>
                                  </thead>
                                  <tbody></tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xs-6 col-lg-6">
                  <div class="box box-default">
                      <div class="box-header with-border">
                          <h3 class="box-title">Expiring Versions</h3>
                      </div>
                      <div class="box-body">
                          <div class="table-responsive">
                              <table class="table no-margin">
                                  <thead>
                                      <tr class="bg-gray">
                                          <th>Version</th>
                                          <th>Expiration Date</th>
                                          
                                      </tr>
                                  </thead>
                                  <tbody></tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
              
          </div>
        </div>
      </section>
     </div>
          
        
          
        
      
  <!-- /.content-wrapper -->
<div class="row">
<div class="col-12">
  <footer class="main-footer">
      <strong><a href="#">Faveo Auto Update Script</a></strong>-Automatically Install and Update Faveo Scripts
  </footer>
        </div>
   </div>
        
        
    



  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
    </div>

      
     
    
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins_manager/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins_manager/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins_manager/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins_manager/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plugins_manager/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../plugins_manager/jqvmap/jquery.vmap.min.js"></script>
<script src="../plugins_manager/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins_manager/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins_manager/moment/moment.min.js"></script>
<script src="../plugins_manager/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins_manager/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins_manager/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins_manager/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist_manager/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist_manager/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist_manager/js/demo.js"></script>
</body>
</html>




