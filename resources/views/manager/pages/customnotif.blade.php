<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Customize Notifications-Faveo Auto Update Script</title>
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
    
    <link rel="stylesheet" href="../CSS/style2.css">
    
    
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
          <li class="nav-item has-treeview">
            <a href="index.html" class="nav-link">
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
            
         <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-flag"></i>
              <p>
                Server Notifications
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="customnotif.html" class="nav-link active">
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
    
      <div class="content-wrapper" style="min-height: 603px;">
          <section class="content-header">
              <div class="alert alert-info">
                  <h4>Customize Notifications</h4>
                  <p>Customize server notifications displayed to users during installation and/or upgrade. All variables surrounded by % sign will be automatically converted into real values in your script.<br><br>For more information on supported variables, refer to the Help section.</p>
              </div>
          </section>
          <section class="content">
              <div class="box box-primary">
                  <div class="box-header with-border">
                      <h3 class="box-title">Customize Notifications</h3>
                  </div>
                  <form>
                      <div class="box-body">
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label>Product Not Found</label>
                                      <textarea name="notification_product_not_found" class="form-control" rows="2" placeholder="Product not found notification">Requested product not found</textarea>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label>Product Inactive</label>
                                      <textarea name="notification_product_inactive" class="form-control" rows="2" placeholder="Product inactive notification">Product %PRODUCT_TITLE% is inactive</textarea>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label>Product Has No Versions</label>
                                      <textarea name="notification_product_no_versions" class="form-control" rows="2" placeholder="Product has no versions notification">%PRODUCT_TITLE% has no versions</textarea>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label>Version Not Found</label>
                                      <textarea name="notification_version_not_found" class="form-control" rows="2" placeholder="Version not found notification">Requested %PRODUCT_TITLE% version not found</textarea>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label>Version Inactive</label>
                                      <textarea name="notification_version_inactive" class="form-control" rows="2" placeholder="Version inactive notification">Product %PRODUCT_TITLE% version %VERSION_NUMBER% is inactive</textarea>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label>Version Expired</label>
                                      <textarea name="notification_version_expired" class="form-control" rows="2" placeholder="Expired version notification">%PRODUCT_TITLE% version %VERSION_NUMBER% expired on %VERSION_EXPIRE_DATE%</textarea>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label>Installations Limit Reached</label>
                                      <textarea name="notification_install_limit_reached" class="form-control" rows="2" placeholder="Version installations limit reached notification">%PRODUCT_TITLE% version %VERSION_NUMBER% installations limit (%VERSION_INSTALL_LIMIT%) reached</textarea>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label>Upgrades Limit Reached</label>
                                      <textarea name="notification_upgrade_limit_reached" class="form-control" rows="2" placeholder="Version upgrades limit reached notification">%PRODUCT_TITLE% version %VERSION_NUMBER% upgrades limit (%VERSION_UPGRADE_LIMIT%) reached</textarea>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label>Installation Archive Not Found</label>
                                      <textarea name="notification_install_archive_not_found" class="form-control" rows="2" placeholder="Installation archive not found notification">%PRODUCT_TITLE% version %VERSION_NUMBER% installation archive not found</textarea>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label>Installation Query Not Found</label>
                                      <textarea name="notification_install_query_not_found" class="form-control" rows="2" placeholder="Installation query not found notification">%PRODUCT_TITLE% version %VERSION_NUMBER% installation query not found</textarea>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label>Upgrade Archive Not Found</label>
                                      <textarea name="notification_upgrade_archive_not_found" class="form-control" rows="2" placeholder="Upgrade archive not found notification">%PRODUCT_TITLE% version %VERSION_NUMBER% upgrade archive not found</textarea>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label>Upgrade Query Not Found</label>
                                      <textarea name="notification_upgrade_query_not_found" class="form-control" rows="2" placeholder="Upgrade query not found notification">%PRODUCT_TITLE% version %VERSION_NUMBER% upgrade query not found</textarea></div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label>Installation Raw Query Not Found</label>
                                      <textarea name="notification_raw_install_query_not_found" class="form-control" rows="2" placeholder="Installation raw query not found notification">%PRODUCT_TITLE% version %VERSION_NUMBER% installation raw query not found</textarea>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label>Upgrade Raw Query Not Found</label>
                                      <textarea name="notification_raw_upgrade_query_not_found" class="form-control" rows="2" placeholder="Upgrade raw query not found notification">%PRODUCT_TITLE% version %VERSION_NUMBER% upgrade raw query not found</textarea>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label>Invalid Signature</label>
                                      <textarea name="notification_invalid_signature" class="form-control" rows="2" placeholder="Invalid application signature notification">Script signature is invalid</textarea>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label>Invalid Parameters</label>
                                      <textarea name="notification_invalid_parameter" class="form-control" rows="2" placeholder="Invalid parameters notification">Invalid parameters</textarea>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label>Installation Not Verified</label>
                                      <textarea name="notification_installation_not_verified" class="form-control" rows="2" placeholder="Unverified installation notification">%PRODUCT_TITLE% updates are only allowed for verified installations</textarea>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label>Unknown Error</label>
                                      <textarea name="notification_unknown_error" class="form-control" rows="2" placeholder="Unknown error notification">An unknown error occurred (probably database failure or unauthorized modification of data)</textarea>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label>Host Banned</label>
                                      <textarea name="notification_host_banned" class="form-control" rows="2" placeholder="Banned IP address notification">Hostname %IP_ADDRESS% is banned</textarea>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label>Action Succeeded</label>
                                      <textarea name="notification_operation_ok" class="form-control" rows="2" placeholder="Successful action notification">Operation successful</textarea>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="box-footer">
                          <input type="hidden" name="notification_id" value="1">
                          <button type="submit" name="submit_ok" class="btn btn-primary">Submit</button>
                      </div>
                  </form>
              </div>
          </section>
    </div>
    
<div class="row">
    <div class="col-lg-12">
  <footer class="main-footer">
    <strong><a href="#" style="color: #007bff;">Faveo Auto Update Script</a></strong>-Automatically Install and Update Faveo Scripts
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




