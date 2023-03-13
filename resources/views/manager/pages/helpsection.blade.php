<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Help Section-PHP Auto Update Script</title>
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
  <link rel="stylesheet" href="../dist_managercss/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins_manager/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins_manager/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins_manager/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    
    <link rel="stylesheet" href="../CSS/style3.css">
    
    
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
                  phpmillion Scripts Receive New Features.
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
                  Force User Input Validation.
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
                Dead Man Switch 1.4 Gets Visual Emails.
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
            <i class="fas fa-info-circle"></i> Help section
            
          </a>
          <div class="dropdown-divider"></div>
          <a href="https://www.phpmillion.com/forums/" class="dropdown-item">
            <i class="far fa-comments"></i>Support Forum
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
            <i class="fas fa-cloud-download-alt"></i>Software updates
          </a>
          <div class="dropdown-divider"></div>
          <a href="updatelicense.html" class="dropdown-item">
          <i class="fas fa-sync-alt"></i>Update license
          </a>
          <div class="dropdown-divider"></div>
            <a href="uninstalllicense.html" class="dropdown-item">
                <i class="fas fa-unlock"></i> Uninstall License.  
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
            <i class="fas fa-user-edit"></i> Edit Profile  
          </a>
           <div class="dropdown-divider"></div>
          <a href="Login.html" class="dropdown-item">
            <i class="fas fa-sign-out-alt"></i>Logout
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
      <span class="brand-text font-weight-light">PHP <b>Auto</b> Update Script </span>
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
                  <i class="fas fa-angle-right"></i>
                  <p>Add New Products</p>
                </a>
              </li>
                <li class="nav-item">
                <a href="viewproducts.html" class="nav-link">
                  <i class="fas fa-angle-right"></i>
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
                  <i class="fas fa-angle-right"></i>
                  <p>Add New Versions</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="viewnewversion.html" class="nav-link">
                 <i class="fas fa-angle-right"></i>
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
                 <i class="fas fa-angle-right"></i>
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
                 <i class="fas fa-angle-right"></i>
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
                  <i class="fas fa-angle-right"></i>
                  <p>View Update Reports</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="viewsystemreports.html" class="nav-link">
                 <i class="fas fa-angle-right"></i>
                  <p>View System Reports</p>
                </a>
              </li>
                <li class="nav-item">
                <a href="viewcrackingreports.html" class="nav-link">
                 <i class="fas fa-angle-right"></i>
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
                  <i class="fas fa-angle-right"></i>
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
                  <i class="fas fa-angle-right"></i>
                  <p>General Settings</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="advancedset.html" class="nav-link">
                  <i class="fas fa-angle-right"></i>
                  <p>Advanced Settings</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="securityset.html" class="nav-link">
                  <i class="fas fa-angle-right"></i>
                  <p>Security Settings</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Systemcleanup.html" class="nav-link">
                  <i class="fas fa-angle-right"></i>
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
                  <i class="fas fa-angle-right"></i>
                  <p>Add New API Key</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="viewapi.html" class="nav-link">
                 <i class="fas fa-angle-right"></i>
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
                  <i class="fas fa-angle-right"></i>
                  <p>Add New Banned Host</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="viewbanned.html" class="nav-link">
                  <i class="fas fa-angle-right"></i>
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
                   <i class="fas fa-angle-right"></i>
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
                  <h4>Help Section</h4>
                  <p>Read PHP Auto Update Script documentation, explore advanced usage tips, find detailed answers to frequently asked questions, and troubleshoot common issues.</p>
              </div>
          </section>
          <section class="content">
              <div class="box box-primary">
                  <div class="row">
                      <div class="col-md-6">
                          <div class="box box-solid first-box">
                              <div class="box-header with-border">
                                  <h3 class="box-title">Using Administration Dashboard</h3>
                              </div>
                              <div class="box-body">
                                  <div class="box-group" id="using_application">
                                      <div class="panel box box-success first-box">
                                          <div class="box-header with-border">
                                              <h4 class="box-title">
                                                  <a data-toggle="collapse" data-parent="#using_application" href="#collapse_using_application1">Getting started</a>
                                              </h4>
                                          </div>
                                          <div id="collapse_using_application1" class="panel-collapse collapse">
                                              <div class="box-body text-justify">Before you can start installing and/or updating your script with PHP Auto Update Script, it only takes 2 easy steps: adding product and version. For your convenience, all the steps are fully explained below.
                                              </div>
                                          </div>
                                      </div>
                                      <div class="panel box box-success first-box">
                                          <div class="box-header with-border">
                                              <h4 class="box-title">
                                                  <a data-toggle="collapse" data-parent="#using_application" href="#collapse_using_application2">Adding new product</a>
                                              </h4>
                                          </div>
                                          <div id="collapse_using_application2" class="panel-collapse collapse">
                                              <div class="box-body text-justify">The first and most obvious step to maintain a product is to create the product itself. Open the <i>Products » Add New Product</i> tab to create your product. Product name, SKU, and security key fields are mandatory and must be unique (different products with same name and/or SKU and/or security key can't exist), while other fields are optional. The number of products is unlimited.
                                              </div>
                                          </div>
                                      </div>
                                      <div class="panel box box-success first-box">
                                          <div class="box-header with-border">
                                              <h4 class="box-title">
                                                  <a data-toggle="collapse" data-parent="#using_application" href="#collapse_using_application3">Editing existing product</a>
                                              </h4>
                                          </div>
                                          <div id="collapse_using_application3" class="panel-collapse collapse">
                                              <div class="box-body text-justify">All previously added products can be edited using the <i>Products » View Products</i> tab. Click desired product name to make any changes needed. If product is in use, be aware that modifying security key might cause new installations and/or upgrades to fail.<br><br> Setting product status to Inactive will deactivate all versions assigned to this product. For example, if there are 10 active versions of a particular product, new installations and/or upgrades will fail for all 10 versions from now, while existing installations of this version will continue working as usual. This option should only be used if you want to prevent users from installing and/or upgrading all versions of a particular product for some reason.
                                              </div>
                                          </div>
                                      </div>
                                      <div class="panel box box-success first-box">
                                          <div class="box-header with-border">
                                              <h4 class="box-title">
                                                  <a data-toggle="collapse" data-parent="#using_application" href="#collapse_using_application4">Adding new version</a>
                                              </h4>
                                          </div>
                                          <div id="collapse_using_application4" class="panel-collapse collapse">
                                              <div class="box-body text-justify">Finally, it's time to add a new version. Open the <i>Versions » Add New Version</i> tab to add a new version.<br><br> Only product and version number fields are mandatory, while optional fields can be used to store separate installation and/or upgrade packages, (raw) MySQL queries, or even cause version to expire at specific date. More on that below.<br><br> PHP Auto Update Script enables storing 4 different sets of script's files for each version: installation archive, upgrade archive, installation MySQL query, and upgrade MySQL query. All these files are optional and should be archived using a ZIP format. Inside the archive, you can store an unlimited number of files in any format your script needs. Each archive will be downloaded and extracted into script's root directory on user's machine (existing files will be overwritten), so structure your archives accordingly.<br><br> If installations or updates limit it set, new installations or updates will be unavailable after this limit is reached. If expiration date is set, this particular version will be unavailable to install and/or upgrade after this date (expiration date can be updated at any time). Existing installations of this version will continue working as usual.
                                              </div>
                                          </div>
                                      </div>
                                      <div class="panel box box-success first-box">
                                          <div class="box-header with-border">
                                              <h4 class="box-title">
                                                  <a data-toggle="collapse" data-parent="#using_application" href="#collapse_using_application5">Editing existing version</a>
                                              </h4>
                                          </div>
                                          <div id="collapse_using_application5" class="panel-collapse collapse">
                                              <div class="box-body text-justify">All previously added versions be edited using the <i>Versions » View Versions</i> tab. Click desired product and version to make any changes needed. Even if a particular version is in use, all the details (even installation and/or upgrade files) can be modified without affecting existing installations.<br><br> Attention: upload new files only if you want to change current files. Otherwise, leave file fields empty.<br><br> Setting version status to Inactive will deactivate this version. For example, if your script's installer is configured to download this particular version, it will fail. Existing installations of this version will continue working as usual.
                                              </div>
                                          </div>
                                      </div>
                                      <div class="panel box box-success first-box">
                                          <div class="box-header with-border">
                                              <h4 class="box-title">
                                                  <a data-toggle="collapse" data-parent="#using_application" href="#collapse_using_application6">Editing existing installation</a>
                                              </h4>
                                          </div>
                                          <div id="collapse_using_application6" class="panel-collapse collapse">
                                              <div class="box-body text-justify">All installations be edited using the <i>Installations » View Installations</i> tab. Click desired installation to make any changes needed. For security reasons, only installation IP address and status can be modified. An existing installation should only be modified if client's IP address was changed and automatic update failed. Otherwise, installation details should never be modified. Deactivating or completely deleting an existing installation will cause internal verification to fail and client will need to re-install script if Verified Updates Only option is enabled.
                                              </div>
                                          </div>
                                      </div>
                                      <div class="panel box box-success first-box">
                                          <div class="box-header with-border">
                                              <h4 class="box-title">
                                                  <a data-toggle="collapse" data-parent="#using_application" href="#collapse_using_application7">Customizing server notifications</a>
                                              </h4>
                                          </div>
                                          <div id="collapse_using_application7" class="panel-collapse collapse">
                                              <div class="box-body text-justify">PHP Auto Update Script allows displaying custom notifications in your script for each event (failed installation, expired version, etc.). Open the <i>Server Notifications » Customize Notifications</i> tab to modify these notifications. The full list of supported variables is below (all variables are sorted alphabetically):<br><br>
                                                  <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                                      <div class="row">
                                                          <div class="col-sm-6"></div>
                                                          <div class="col-sm-6">
                                                              <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                                                  <label class="search">Search: <input type="search" class="form-control input-sm" placeholder="" aria-controls="DataTables_Table_0">
                                                                  </label>
                                                              <br>
                                                              <br>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="row">
                                                          <div class="col-sm-12">
                                                              <table class="custom_table_minimal table table-bordered table-striped dataTable no-footer" id="DataTables_Table_0" role="grid">
                                                                  <thead>
                                                                      <tr role="row">
                                                                          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Variable Name: activate to sort column ascending" style="width: 0px;">Variable Name</th>
                                                                          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Variable Value: activate to sort column ascending" style="width: 0px;">Variable Value</th>
                                                                          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Notes: activate to sort column ascending" style="width: 0px;">Notes</th>
                                                                      </tr>
                                                                  </thead>
                                                                  <tbody>
                                                                      <tr role="row" class="odd">
                                                                          <td>%IP_ADDRESS%</td>
                                                                          <td>IP address of user's machine</td>
                                                                          <td></td>
                                                                      </tr>
                                                                      <tr role="row" class="even">
                                                                          <td>%PRODUCT_FULL_DESCRIPTION%</td>
                                                                          <td>Product full description</td>
                                                                          <td>Not available for 'Product Not Found' notification</td>
                                                                      </tr>
                                                                      <tr role="row" class="odd">
                                                                          <td>%PRODUCT_ID%</td>
                                                                          <td>Internal product ID</td>
                                                                          <td>Not recommended to display for security reasons. Not available for 'Product Not Found' notification</td>
                                                                      </tr>
                                                                      <tr role="row" class="even">
                                                                          <td>%PRODUCT_SHORT_DESCRIPTION%</td>
                                                                          <td>Product short description</td>
                                                                          <td>Not available for 'Product Not Found' notification</td>
                                                                      </tr>
                                                                      <tr role="row" class="odd">
                                                                          <td>%PRODUCT_TITLE%</td>
                                                                          <td>Product title</td>
                                                                          <td>Not available for 'Product Not Found' notification</td>
                                                                      </tr>
                                                                      <tr role="row" class="even">
                                                                          <td>%PRODUCT_URL_HOMEPAGE%</td>
                                                                          <td>Product homepage URL</td>
                                                                          <td>Not available for 'Product Not Found' notification</td>
                                                                      </tr>
                                                                      <tr role="row" class="odd">
                                                                          <td>%PRODUCT_URL_ORDER%</td>
                                                                          <td>Product order URL</td>
                                                                          <td>Not available for 'Product Not Found' notification</td>
                                                                      </tr>
                                                                      <tr role="row" class="even">
                                                                          <td>%VERSION_EXPIRE_DATE%</td>
                                                                          <td>Version expiration date</td>
                                                                          <td>Only available for time-expiring versions</td>
                                                                      </tr>
                                                                      <tr role="row" class="odd">
                                                                          <td>%VERSION_INSTALL_LIMIT%</td>
                                                                          <td>Version installations limit</td>
                                                                          <td>Only available for versions with limited installations</td>
                                                                      </tr>
                                                                      <tr role="row" class="even">
                                                                          <td>%VERSION_NUMBER%</td>
                                                                          <td>Version number user requested to install/upgrade</td>
                                                                          <td></td>
                                                                      </tr>
                                                                      <tr role="row" class="odd">
                                                                          <td>%VERSION_UPGRADE_LIMIT%</td>
                                                                          <td>Version upgrades limit</td>
                                                                          <td>Only available for versions with limited upgrades</td>
                                                                      </tr>
                                                                  </tbody>
                                                              </table>
                                                          </div>
                                                      </div>
                                                      <div class="row">
                                                          <div class="col-sm-5"></div>
                                                          <div class="col-sm-7"></div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="box box-solid second-box">
                              <div class="box-header with-border">
                                  <h3 class="box-title">Using API</h3>
                              </div>
                              <div class="box-body">
                                  <div class="box-group" id="using_api">
                                      <div class="panel box box-warning second-box">
                                          <div class="box-header with-border">
                                              <h4 class="box-title">
                                                  <a data-toggle="collapse" data-parent="#using_api" href="#collapse_using_api1">Enabling and configuring API</a>
                                              </h4>
                                          </div>
                                          <div id="collapse_using_api1" class="panel-collapse collapse">
                                              <div class="box-body text-justify">With the help of PHP Auto Update Script API, you can perform any action from a remote script. Just enable API using the <i>Software Settings » Advanced Settings</i> tab and send all requests to <code>http://developers.productdemourl.com/update-manager/WEB/aus_api/api.php</code>.<br><br> Before API can be accessed, a new API key should be created using the <i>API Keys » Add New API Key</i> tab. Application allows creating multiple API keys with different permissions; therefore, you can grant different permissions for different keys. Optionally, you can accept API requests only from specific IP address(es), so connections from other IPs will be blocked. Any API key can be activated/deactivated at any time.<br><br> Additionally, you can secure the <code>/aus_api</code> directory using 
                                                  <a href="http://www.htaccesstools.com/articles/password-protection/" title="Password Protection with htaccess" target="_blank">htaccess password protection
                                                  </a> (don't forget to add authorization headers to all API requests in this case). If you don't use API, leave it disabled.
                                              </div>
                                          </div>
                                      </div>
                                      <div class="panel box box-warning second-box">
                                          <div class="box-header with-border">
                                              <h4 class="box-title">
                                                  <a data-toggle="collapse" data-parent="#using_api" href="#collapse_using_api2">Formatting and sending API requests</a>
                                              </h4>
                                          </div>
                                          <div id="collapse_using_api2" class="panel-collapse collapse">
                                              <div class="box-body text-justify">All API requests should be sent to <code>/aus_api/api.php</code> using <i>POST</i> method and include unique API secret along with additional data you want to submit. Here's a basic example on how API request should look like:<br><br> API URL:<br><pre>http://developers.productdemourl.com/update-manager/WEB/aus_api/api.php</pre><br> Post Data:<br><pre>api_key_secret=UNIQUE_API_SECRET&amp;api_function=FUNCTION_TO_CALL&amp;argument1=value1&amp;argument2=value2...</pre><br> API will always return a json-encoded response for each request. The list of every response field is below.<br><br>
                                                  <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row">
                                                      <div class="col-sm-6"></div>
                                                      <div class="col-sm-6">
                                                          <div id="DataTables_Table_1_filter" class="dataTables_filter">
                                                              <label class="search">Search: <input type="search" class="form-control input-sm" placeholder="" aria-controls="DataTables_Table_1">
                                                              </label>
                                                          <br>
                                                          <br>
                                                          </div>
                                                      </div>
                                                      </div>
                                                      <div class="row">
                                                          <div class="col-sm-12">
                                                              <table class="custom_table_minimal table table-bordered table-striped dataTable no-footer" id="DataTables_Table_1" role="grid">
                                                                  <thead>
                                                                      <tr role="row">
                                                                          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Response Field: activate to sort column ascending" style="width: 0px;">Response Field</th>
                                                                          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Description: activate to sort column ascending" style="width: 0px;">Description</th>
                                                                          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Notes: activate to sort column ascending" style="width: 0px;">Notes</th>
                                                                      </tr>
                                                                  </thead>
                                                                  <tbody>
                                                                      <tr role="row" class="odd">
                                                                          <td>api_action_success</td>
                                                                          <td>API status</td>
                                                                          <td>Success: <code>1</code>, failure: <code>0</code></td>
                                                                      </tr>
                                                                      <tr role="row" class="even">
                                                                          <td>api_error_detected</td>
                                                                          <td>API error check</td>
                                                                          <td>No error found: <code>0</code>, error found: <code>1</code></td>
                                                                      </tr>
                                                                      <tr role="row" class="odd">
                                                                          <td>action_success</td>
                                                                          <td>User request status</td>
                                                                          <td>Success: <code>1</code>, failure: <code>0</code></td></tr><tr role="row" class="even"><td>error_detected</td><td>User request error check</td>
                                                                      <td>No error found: <code>0</code>, error found: <code>1</code></td>
                                                                      </tr>
                                                                      <tr role="row" class="odd">
                                                                          <td>page_message</td>
                                                                          <td>Detailed success/failure description</td>
                                                                          <td>Might contain additional data (if any) requested by user</td>
                                                                      </tr>
                                                                  </tbody>
                                                              </table>
                                                          </div>
                                                      </div>
                                                      <div class="row">
                                                          <div class="col-sm-5"></div>
                                                          <div class="col-sm-7"></div>
                                                      </div>
                                                  </div>
                                                  <br>
                                                  <br> 
                                                  As can be seen, response body contains two types of status/error fields: API itself and original user request. The first one (starting with <code>api_</code>) indicates status/error of API system itself. For example, if API is disabled, <code>api_action_success</code> will have a value of <code>0</code> and <code>api_error_detected</code> will have a value of <code>1</code>. In addition, <code>page_message</code> will say: <i>The action could not be completed because of this reason: API not enabled or invalid API function</i>.<br><br> If API is enabled and works properly, but original user request failed (for example, user tried to add a new version without specifying product), <code>api_action_success</code> will have a value of <code>1</code> and <code>api_error_detected</code> will have a value of <code>0</code> (because there’s nothing wrong with API itself), but <code>action_success</code> will have a value of <code>0</code> and <code>error_detected</code> will have a value of <code>1</code>. Sure enough, <code>page_message</code> will say: <i>Invalid product</i>.
                                              </div>
                                          </div>
                                      </div>
                                      <div class="panel box box-warning second-box">
                                          <div class="box-header with-border">
                                              <h4 class="box-title">
                                                  <a data-toggle="collapse" data-parent="#using_api" href="#collapse_using_api3">API arguments list</a>
                                              </h4>
                                          </div>
                                          <div id="collapse_using_api3" class="panel-collapse collapse">
                                              <div class="box-body text-justify">All the API arguments you will ever use are self-explanatory. However, if you find some variable not clear, refer to this list for more details (all variables are sorted alphabetically):<br><br>
                                                  <div id="DataTables_Table_2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                                      <div class="row">
                                                          <div class="col-sm-6"></div>
                                                          <div class="col-sm-6">
                                                              <div id="DataTables_Table_2_filter" class="dataTables_filter">
                                                                  <label class="search">Search: <input type="search" class="form-control input-sm" placeholder="" aria-controls="DataTables_Table_2">
                                                                  </label>
                                                              <br>
                                                              <br>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="row">
                                                          <div class="col-sm-12">
                                                              <table class="custom_table_minimal table table-bordered table-striped dataTable no-footer" id="DataTables_Table_2" role="grid">
                                                                  <thead>
                                                                      <tr role="row">
                                                                          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Argument Name: activate to sort column ascending" style="width: 0px;">Argument Name</th>
                                                                          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Description: activate to sort column ascending" style="width: 0px;">Description</th>
                                                                          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Notes: activate to sort column ascending" style="width: 0px;">Notes</th>
                                                                      </tr>
                                                                  </thead>
                                                                  <tbody>
                                                                      <tr role="row" class="odd">
                                                                          <td>banned_host_comments</td>
                                                                          <td>Optional blocked IP comments</td>
                                                                          <td></td>
                                                                      </tr>
                                                                      <tr role="row" class="even">
                                                                          <td>banned_host_id</td>
                                                                          <td>Numeric blocked IP ID</td>
                                                                          <td></td>
                                                                      </tr>
                                                                      <tr role="row" class="odd">
                                                                          <td>banned_host_ip</td>
                                                                          <td>IP address to block</td>
                                                                          <td></td>
                                                                      </tr>
                                                                      <tr role="row" class="even">
                                                                          <td>delete_record</td>
                                                                          <td>Delete particular record</td>
                                                                          <td>Delete: <code>1</code></td>
                                                                      </tr>
                                                                      <tr role="row" class="odd">
                                                                          <td>delete_version_install_file</td>
                                                                          <td>Delete installation archive only</td>
                                                                          <td>Delete: <code>1</code></td>
                                                                      </tr>
                                                                      <tr role="row" class="even">
                                                                          <td>delete_version_install_query</td>
                                                                          <td>Delete installation MySQL query only</td>
                                                                          <td>Delete: <code>1</code></td>
                                                                      </tr>
                                                                      <tr role="row" class="odd">
                                                                          <td>delete_version_upgrade_file</td>
                                                                          <td>Delete upgrade archive only</td>
                                                                          <td>Delete: <code>1</code></td>
                                                                      </tr>
                                                                      <tr role="row" class="even">
                                                                          <td>delete_version_upgrade_query</td>
                                                                          <td>Delete upgrade MySQL query only</td>
                                                                          <td>Delete: <code>1</code></td>
                                                                      </tr>
                                                                      <tr role="row" class="odd">
                                                                          <td>installation_id</td>
                                                                          <td>Numeric installation ID</td>
                                                                          <td>Can be parsed from search API</td>
                                                                      </tr>
                                                                      <tr role="row" class="even">
                                                                          <td>installation_ip</td>
                                                                          <td>Installation IP address</td>
                                                                          <td></td>
                                                                      </tr>
                                                                      <tr role="row" class="odd">
                                                                          <td>installation_status</td>
                                                                          <td>Installation IP address</td>
                                                                          <td>Active: <code>1</code>, inactive: <code>0</code></td>
                                                                      </tr>
                                                                      <tr role="row" class="even">
                                                                          <td>product_full_description</td>
                                                                          <td>Full product description</td>
                                                                          <td></td>
                                                                      </tr>
                                                                      <tr role="row" class="odd">
                                                                          <td>product_id</td>
                                                                          <td>Numeric product ID</td>
                                                                          <td>Can be parsed from search API</td>
                                                                      </tr>
                                                                      <tr role="row" class="even">
                                                                          <td>product_key</td>
                                                                          <td>Product security key</td>
                                                                          <td>Must be unique</td>
                                                                      </tr>
                                                                      <tr role="row" class="odd">
                                                                          <td>product_price</td>
                                                                          <td>Product price</td>
                                                                          <td></td>
                                                                      </tr>
                                                                      <tr role="row" class="even">
                                                                          <td>product_short_description</td>
                                                                          <td>Short product description</td>
                                                                          <td></td>
                                                                      </tr>
                                                                      <tr role="row" class="odd">
                                                                          <td>product_sku</td>
                                                                          <td>Product stock keeping unit</td>
                                                                          <td>Must be unique</td>
                                                                      </tr>
                                                                      <tr role="row" class="even">
                                                                          <td>product_status</td>
                                                                          <td>Product status</td>
                                                                          <td>Active: <code>1</code>, inactive: <code>0</code></td>
                                                                      </tr>
                                                                      <tr role="row" class="odd">
                                                                          <td>product_max_active_versions</td>
                                                                          <td>Maximum number of supported versions</td>
                                                                          <td></td>
                                                                      </tr>
                                                                      <tr role="row" class="even">
                                                                          <td>product_title</td>
                                                                          <td>Product name</td>
                                                                          <td>Must be unique</td>
                                                                      </tr>
                                                                      <tr role="row" class="odd">
                                                                          <td>product_url_homepage</td>
                                                                          <td>Product homepage URL</td>
                                                                          <td></td>
                                                                      </tr>
                                                                      <tr role="row" class="even">
                                                                          <td>product_url_order</td>
                                                                          <td>Product order URL</td>
                                                                          <td></td>
                                                                      </tr>
                                                                      <tr role="row" class="odd">
                                                                          <td>reset_install_count</td>
                                                                          <td>Reset installations counter</td>
                                                                          <td>Reset: <code>1</code></td>
                                                                      </tr>
                                                                      <tr role="row" class="even">
                                                                          <td>reset_upgrade_count</td>
                                                                          <td>Reset upgrades counter</td>
                                                                          <td>Reset: <code>1</code>
                                                                          </td>
                                                                      </tr>
                                                                      <tr role="row" class="odd">
                                                                          <td>search_keyword</td>
                                                                          <td>Keyword(s) to be used for search</td>
                                                                          <td></td>
                                                                      </tr>
                                                                      <tr role="row" class="even">
                                                                          <td>search_type</td>
                                                                          <td>API search type</td>
                                                                          <td>Available values: <code>banned_host</code>, <code>callback</code>, <code>installation</code>, <code>product</code>, <code>report</code>, <code>version</code></td>
                                                                      </tr>
                                                                      <tr role="row" class="odd">
                                                                          <td>version_changelog</td>
                                                                          <td>Detailed version changelog</td>
                                                                          <td></td>
                                                                      </tr>
                                                                      <tr role="row" class="even">
                                                                          <td>version_comments</td>
                                                                          <td>Optional version comments</td>
                                                                          <td></td>
                                                                      </tr>
                                                                      <tr role="row" class="odd">
                                                                          <td>version_expire_date</td>
                                                                          <td>Date after which version will expire</td>
                                                                          <td></td>
                                                                      </tr>
                                                                      <tr role="row" class="even">
                                                                          <td>version_id</td>
                                                                          <td>Numeric version ID</td>
                                                                          <td>Can be parsed from search API</td>
                                                                      </tr>
                                                                      <tr role="row" class="odd">
                                                                          <td>version_install_file</td>
                                                                          <td>Archive with installation files</td>
                                                                          <td>Must be ZIP archive</td>
                                                                      </tr>
                                                                      <tr role="row" class="even">
                                                                          <td>version_install_limit</td>
                                                                          <td>Installations limit</td>
                                                                          <td></td>
                                                                      </tr>
                                                                      <tr role="row" class="odd">
                                                                          <td>version_install_query</td>
                                                                          <td>Archive with MySQL installation query</td>
                                                                          <td>Must be ZIP archive</td>
                                                                      </tr>
                                                                      <tr role="row" class="even">
                                                                          <td>version_number</td>
                                                                          <td>Version number</td>
                                                                          <td></td>
                                                                      </tr>
                                                                      <tr role="row" class="odd">
                                                                          <td>version_raw_install_query</td>
                                                                          <td>Version raw MySQL installation query</td>
                                                                          <td></td>
                                                                      </tr>
                                                                      <tr role="row" class="even">
                                                                          <td>version_raw_upgrade_query</td>
                                                                          <td>Version raw MySQL upgrade query</td>
                                                                          <td></td>
                                                                      </tr>
                                                                      <tr role="row" class="odd">
                                                                          <td>version_status</td>
                                                                          <td>Version status</td>
                                                                          <td>Active: <code>1</code>, inactive: <code>0</code>
                                                                          </td>
                                                                      </tr>
                                                                      <tr role="row" class="even">
                                                                          <td>version_upgrade_file</td>
                                                                          <td>Archive with upgrade files</td>
                                                                          <td>Must be ZIP archive</td>
                                                                      </tr>
                                                                      <tr role="row" class="odd">
                                                                          <td>version_upgrade_limit</td>
                                                                          <td>Upgrades limit</td>
                                                                          <td></td>
                                                                      </tr>
                                                                      <tr role="row" class="even">
                                                                          <td>version_upgrade_query</td>
                                                                          <td>Archive with MySQL upgrade query</td>
                                                                          <td>Must be ZIP archive</td>
                                                                      </tr>
                                                                  </tbody>
                                                              </table>
                                                          </div>
                                                      </div>
                                                      <div class="row">
                                                          <div class="col-sm-5"></div>
                                                          <div class="col-sm-7"></div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="panel box box-warning second-box">
                                          <div class="box-header with-border">
                                              <h4 class="box-title">
                                                  <a data-toggle="collapse" data-parent="#using_api" href="#collapse_using_api4">Built-in API arguments</a>
                                              </h4>
                                          </div>
                                          <div id="collapse_using_api4" class="panel-collapse collapse">
                                              <div class="box-body text-justify">Some API functions require record status and/or date to be included. Hence, these functions use built-in arguments listed below:<br><br><b>Record status</b>:<br> Active (enabled): <code>1</code><br> Inactive (disabled): <code>0</code><br><br><b>Date</b>:<br><code>yyyy-mm-dd</code> (date should always be formatted using a locale neutral format, as specified by 
                                                  <a href="https://en.wikipedia.org/wiki/ISO_8601" title="ISO 8601" target="_blank">ISO 8601</a>).<br><br>
                                                  <b>Record removal</b>:<br> In case any record needs to be deleted, an extra argument <code>delete_record</code> with value <code>1</code> should be added:<br><pre>delete_record=1</pre>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="panel box box-warning second-box">
                                          <div class="box-header with-border">
                                              <h4 class="box-title">
                                                  <a data-toggle="collapse" data-parent="#using_api" href="#collapse_using_api5">Adding new product</a>
                                              </h4>
                                          </div>
                                          <div id="collapse_using_api5" class="panel-collapse collapse">
                                              <div class="box-body text-justify">API Function: <code>products_add</code><br> Required Arguments: <code>product_title</code>, <code>product_sku</code>, <code>product_key</code>, <code>product_status</code><br> Optional Arguments: <code>product_short_description</code>, <code>product_full_description</code>, <code>product_url_homepage</code>, <code>product_url_order</code>, <code>product_price</code>, <code>product_max_active_versions</code><br><br> Post Data Example:<br><pre>api_key_secret=UNIQUE_API_SECRET&amp;api_function=products_add&amp;product_title=My_Product_Name&amp;product_sku=MPN&amp;product_key=some_random_text&amp;product_status=1&amp;product_short_description=short_description&amp;product_full_description=full_description&amp;product_url_homepage=http://developers.productdemourl.com/update-manager/WEB&amp;product_url_order=http://developers.productdemourl.com/update-manager/WEB/order/&amp;product_price=19.99&amp;product_max_active_versions=5</pre>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="panel box box-warning second-box">
                                          <div class="box-header with-border">
                                              <h4 class="box-title">
                                                  <a data-toggle="collapse" data-parent="#using_api" href="#collapse_using_api6">Editing existing product</a>
                                              </h4>
                                          </div>
                                          <div id="collapse_using_api6" class="panel-collapse collapse">
                                              <div class="box-body text-justify">API Function: <code>products_edit</code><br> Required Arguments: <code>product_id</code>, <code>product_title</code>, <code>product_sku</code>, <code>product_key</code>, <code>product_status</code><br> Optional Arguments: <code>product_short_description</code>, <code>product_full_description</code>, <code>product_url_homepage</code>, <code>product_url_order</code>, <code>product_price</code>, <code>product_max_active_versions</code>, <code>delete_record</code><br><br> Post Data Example:<br><pre>api_key_secret=UNIQUE_API_SECRET&amp;api_function=products_edit&amp;product_id=1&amp;product_title=My_Product_Name&amp;product_sku=MPN&amp;product_key=some_random_text&amp;product_status=1&amp;product_short_description=short_description&amp;product_full_description=full_description&amp;product_url_homepage=http://developers.productdemourl.com/update-manager/WEB&amp;product_url_order=http://developers.productdemourl.com/update-manager/WEB/order/&amp;product_price=19.99&amp;product_max_active_versions=5</pre>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="panel box box-warning second-box">
                                          <div class="box-header with-border">
                                              <h4 class="box-title">
                                                  <a data-toggle="collapse" data-parent="#using_api" href="#collapse_using_api7">Adding new version</a>
                                              </h4>
                                          </div>
                                          <div id="collapse_using_api7" class="panel-collapse collapse">
                                              <div class="box-body text-justify">This one is a bit more tricky, since it requires submitting product ID stored in the database. How do you get required ID? Using search API! Since detailed instructions on how to use search API is available in the Help Section itself, let's assume you already know how to find records.<br><br> API Function: <code>versions_add</code><br> Required Arguments: <code>product_id</code>, <code>version_number</code>, <code>version_status</code><br> Optional Arguments: <code>version_install_file</code>, <code>version_install_query</code>, <code>version_raw_install_query</code>, <code>version_upgrade_file</code>, <code>version_upgrade_query</code>, <code>version_raw_upgrade_query</code>, <code>version_install_limit</code>, <code>version_upgrade_limit</code>, <code>version_changelog</code>, <code>version_expire_date</code>, <code>version_comments</code><br><br> Post Data Example:<br><pre>api_key_secret=UNIQUE_API_SECRET&amp;api_function=versions_add&amp;product_id=1&amp;version_number=1.0&amp;version_status=1&amp;version_install_file=install_file.zip&amp;version_install_query=install_query.zip&amp;version_raw_install_query=mysql_query_to_install&amp;version_upgrade_file=upgrade_file.zip&amp;version_upgrade_query=upgrade_query.zip&amp;version_raw_upgrade_query=mysql_query_to_upgrade&amp;version_install_limit=100&amp;version_upgrade_limit=200&amp;version_changelog=detailed_changes_list&amp;version_expire_date=2022-03-25&amp;version_comments=some_comments</pre><br> Attention: if you upload files using API, create a CURLFile object for each file first, otherwise upload will fail. This requirement comes right from PHP and is not related to PHP Auto Update Script; therefore, your support contract with us doesn't include any assistance with file uploads. In other words, it's solely programmer's responsibility to write a code that supports both posting data and uploading files at the same time.
                                              </div>
                                          </div>
                                      </div>
                                      <div class="panel box box-warning second-box">
                                          <div class="box-header with-border">
                                              <h4 class="box-title">
                                                  <a data-toggle="collapse" data-parent="#using_api" href="#collapse_using_api8">Editing existing version</a>
                                              </h4>
                                          </div>
                                          <div id="collapse_using_api8" class="panel-collapse collapse">
                                              <div class="box-body text-justify">API Function: <code>versions_edit</code><br> Required Arguments: <code>version_id</code>, <code>product_id</code>, <code>version_number</code>, <code>version_status</code><br> Optional Arguments: <code>version_install_file</code>, <code>version_install_query</code>, <code>version_raw_install_query</code>, <code>version_upgrade_file</code>, <code>version_upgrade_query</code>, <code>version_raw_upgrade_query</code>, <code>version_install_limit</code>, <code>version_upgrade_limit</code>, <code>version_changelog</code>, <code>version_expire_date</code>, <code>version_comments</code>, <code>delete_record</code>, <code>delete_version_install_file</code>, <code>delete_version_install_query</code>, <code>delete_version_upgrade_file</code>, <code>delete_version_upgrade_query</code>, <code>reset_install_count</code>, <code>reset_upgrade_count</code><br><br> Post Data Example:<br><pre>api_key_secret=UNIQUE_API_SECRET&amp;api_function=versions_edit&amp;version_id=1&amp;product_id=1&amp;version_number=1.0&amp;version_status=1&amp;version_install_file=install_file.zip&amp;version_install_query=install_query.zip&amp;version_raw_install_query=mysql_query_to_install&amp;version_upgrade_file=upgrade_file.zip&amp;version_upgrade_query=upgrade_query.zip&amp;version_raw_upgrade_query=mysql_query_to_upgrade&amp;version_install_limit=100&amp;version_upgrade_limit=200&amp;version_changelog=detailed_changes_list&amp;version_expire_date=2022-03-25&amp;version_comments=some_comments</pre><br> Attention: if you upload files using API, create a CURLFile object for each file first, otherwise upload will fail. This requirement comes right from PHP and is not related to PHP Auto Update Script; therefore, your support contract with us doesn't include any assistance with file uploads. In other words, it's solely programmer's responsibility to write a code that supports both posting data and uploading files at the same time.
                                              </div>
                                          </div>
                                      </div>
                                      <div class="panel box box-warning second-box">
                                          <div class="box-header with-border">
                                              <h4 class="box-title">
                                                  <a data-toggle="collapse" data-parent="#using_api" href="#collapse_using_api9">Editing existing installation</a>
                                              </h4>
                                          </div>
                                          <div id="collapse_using_api9" class="panel-collapse collapse">
                                              <div class="box-body text-justify">API Function: <code>installations_edit</code><br> Required Arguments: <code>installation_id</code>, <code>installation_ip</code>, <code>installation_status</code><br> Optional Arguments: <code>delete_record</code><br><br> Post Data Example:<br><pre>api_key_secret=UNIQUE_API_SECRET&amp;api_function=installations_edit&amp;installation_id=1&amp;installation_ip=192.168.1.1&amp;installation_status=1</pre>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="panel box box-warning second-box">
                                          <div class="box-header with-border">
                                              <h4 class="box-title">
                                                  <a data-toggle="collapse" data-parent="#using_api" href="#collapse_using_api10">Adding new banned host</a>
                                              </h4>
                                          </div>
                                          <div id="collapse_using_api10" class="panel-collapse collapse">
                                              <div class="box-body text-justify">API Function: <code>banned_hosts_add</code><br> Required Arguments: <code>banned_host_ip</code><br> Optional Arguments: <code>banned_host_comments</code><br><br> Post Data Example:<br><pre>api_key_secret=UNIQUE_API_SECRET&amp;api_function=banned_hosts_add&amp;banned_host_ip=192.168.1.1&amp;banned_host_comments=Unauthorized</pre>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="panel box box-warning second-box">
                                          <div class="box-header with-border">
                                              <h4 class="box-title">
                                                  <a data-toggle="collapse" data-parent="#using_api" href="#collapse_using_api11">Editing existing banned host</a>
                                              </h4>
                                          </div>
                                          <div id="collapse_using_api11" class="panel-collapse collapse">
                                              <div class="box-body text-justify">API Function: <code>banned_hosts_edit</code><br> Required Arguments: <code>banned_host_id</code>, <code>banned_host_ip</code><br> Optional Arguments: <code>banned_host_comments</code>, <code>delete_record</code><br><br> Post Data Example:<br><pre>api_key_secret=UNIQUE_API_SECRET&amp;api_function=banned_hosts_edit&amp;banned_host_id=1&amp;banned_host_ip=192.168.1.1&amp;banned_host_comments=Unauthorized</pre>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="panel box box-warning second-box">
                                          <div class="box-header with-border">
                                              <h4 class="box-title">
                                                  <a data-toggle="collapse" data-parent="#using_api" href="#collapse_using_api12">Searching for data</a>
                                              </h4>
                                          </div>
                                          <div id="collapse_using_api12" class="panel-collapse collapse">
                                              <div class="box-body text-justify">API Function: <code>search</code><br> Required Arguments: <code>search_type</code>, <code>search_keyword</code><br> Optional Arguments: <code>N/A</code><br><br> Post Data Example:<br><pre>api_key_secret=UNIQUE_API_SECRET&amp;api_function=search&amp;search_type=product&amp;search_keyword=My_Product_Name</pre><br> Argument <code>search_type</code> can contain one of these values: <code>banned_host</code>, <code>callback</code>, <code>installation</code>, <code>product</code>, <code>report</code>, <code>version</code>. Argument <code>search_keyword</code> can contain the exact search term or a part of it.<br><br> You can find matching records by one of these values:<br><br> Banned host: <code>IP address</code>, <code>comments</code><br> Callback: <code>callback IP</code><br> Installation: <code>installation IP</code><br> Product: <code>product name</code>, <code>SKU</code><br> Report: <code>report text</code><br> Version: <code>product name</code>, <code>SKU</code>, <code>version number</code>, <code>comments</code><br><br> Search results are always returned using JSON format.
                                              </div>
                                          </div>
                                      </div>
                                      <div class="panel box box-warning second-box">
                                          <div class="box-header with-border">
                                              <h4 class="box-title">
                                                  <a data-toggle="collapse" data-parent="#using_api" href="#collapse_using_api13">Ready to use code for connecting to API</a>
                                              </h4>
                                          </div>
                                          <div id="collapse_using_api13" class="panel-collapse collapse">
                                              <div class="box-body text-justify">If you don't know how to make POST requests, visit <a href="https://www.phpmillion.com/forums/" title="phpmillion Support Forums" target="_blank">phpmillion Support Forums</a>; we will provide you with custom code snippet which is designed exclusively for PHP Auto Update Script API. The code connects to API, performs specified request, and parses API response in less than a second.</div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="box box-primary">
                  <div class="row">
                      <div class="col-md-6">
                          <div class="box box-solid third-box">
                              <div class="box-header with-border">
                                  <h3 class="box-title">Installing and Updating Your Script</h3>
                              </div>
                              <div class="box-body">
                                  <div class="box-group" id="installing_updating_your_script">
                                      <div class="panel box box-danger third-box">
                                          <div class="box-header with-border">
                                              <h4 class="box-title">
                                                  <a data-toggle="collapse" data-parent="#installing_updating_your_script" href="#collapse_installing_updating_your_script1">General requirements for updates engine</a></h4>
                                          </div>
                                          <div id="collapse_installing_updating_your_script1" class="panel-collapse collapse">
                                              <div class="box-body text-justify">PHP Auto Update Script works on any server that supports 
                                                  <a href="https://secure.php.net/" title="PHP" target="_blank">PHP</a> 5.5 or higher along with its most popular extensions: 
                                                  <a href="https://secure.php.net/manual/en/book.mysqli.php" title="MySQLi" target="_blank">MySQLi</a>, 
                                                  <a href="https://secure.php.net/manual/en/book.curl.php" title="cURL" target="_blank">cURL</a>, <a href="https://secure.php.net/manual/en/book.openssl.php" title="OpenSSL" target="_blank">OpenSSL</a> and 
                                                  <a href="https://secure.php.net/manual/en/book.fileinfo.php" title="File Information" target="_blank">File Information</a>. Since 99% of hosting providers (even free ones) have these extensions enabled by default, PHP Auto Update Script is virtually compatible with any server around.<br><br> End user's machine (the one running script powered by PHP Auto Update Script) has no extra requirements; it only needs to support PHP with 
                                                  <a href="https://secure.php.net/manual/en/book.curl.php" title="cURL" target="_blank">cURL</a> and 
                                                  <a href="https://secure.php.net/manual/en/class.ziparchive.php" title="ZipArchive" target="_blank">ZipArchive</a> 
                                                  extensions. No database support or other extensions are needed.
                                              </div>
                                          </div>
                                      </div>
                                      <div class="panel box box-danger third-box">
                                          <div class="box-header with-border">
                                              <h4 class="box-title">
                                                  <a data-toggle="collapse" data-parent="#installing_updating_your_script" href="#collapse_installing_updating_your_script2">Integrating PHP Auto Update Script into your script</a>
                                              </h4>
                                          </div>
                                          <div id="collapse_installing_updating_your_script2" class="panel-collapse collapse">
                                              <div class="box-body text-justify">This type of information is only available outside administration dashboard for security reasons. A detailed integration guide is included in the PHP Auto Update Script installation package; see '<i>/DOCUMENTATION</i>' directory for step-by-step instructions and full documentation.<br><br> The installation package also contains a fully working demo application powered by PHP Auto Update Script; feel free to explore its source code for even better understanding how application works.
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="box box-solid fourth-box">
                              <div class="box-header with-border">
                                  <h3 class="box-title">Frequently Asked Questions</h3>
                              </div>
                              <div class="box-body">
                                  <div class="box-group" id="faq">
                                      <div class="panel box box-info fourth-box">
                                          <div class="box-header with-border">
                                              <h4 class="box-title">
                                                  <a data-toggle="collapse" data-parent="#faq" href="#collapse_faq1">What is additional authentication protection in user account?</a>
                                              </h4>
                                          </div>
                                          <div id="collapse_faq1" class="panel-collapse collapse">
                                              <div class="box-body text-justify">This option hardens security of authenticated account by checking and comparing user's system fingerprint stored in login cookies. Technically speaking, if someone manages to steal authentication cookies from user's computer and starts using them on his own system (which will obviously have a different fingerprint), authentication module will terminate unauthorized cookies. Keep in mind that application will also terminate valid cookies if any part of user's fingerprint (IP address, browser, etc.) is changed. Hence, user will need to login again to confirm his new fingerprint.</div>
                                          </div>
                                      </div>
                                      <div class="panel box box-info fourth-box">
                                          <div class="box-header with-border">
                                              <h4 class="box-title">
                                                  <a data-toggle="collapse" data-parent="#faq" href="#collapse_faq2">What is Whitelisted Access Only option for?</a>
                                              </h4>
                                          </div>
                                          <div id="collapse_faq2" class="panel-collapse collapse">
                                              <div class="box-body text-justify">If whitelisted access is enabled using <i>Software Settings » Security Settings</i> tab, only users from whitelisted IPs will be able to use application. Hence, if someone tries to access any part of administration dashboard and his IP is not whitelisted, he will see a blank page.<br><br> This option is slightly different from Allowed Login IP(s) option in user account because it completely blocks access to all parts of administration dashboard (including login/lost password sections), while Allowed Login IP(s) option allows access to login section, so anyone can try to login (but login will only be accepted if IP is allowed). That is to say, Whitelisted Access Only option prevents 3rd parties from even accessing login section, making it virtually impossible to even start hacking application.
                                              </div>
                                          </div>
                                      </div>
                                      <div class="panel box box-info fourth-box">
                                          <div class="box-header with-border">
                                              <h4 class="box-title">
                                                  <a data-toggle="collapse" data-parent="#faq" href="#collapse_faq3">
                                                      What is product security key used for?
                                                  </a>
                                              </h4>
                                          </div>
                                          <div id="collapse_faq3" class="panel-collapse collapse">
                                              <div class="box-body text-justify">Product security key is used to prevent unauthorized downloads of your script, so only users who own the script can connect to your server. Product ID along with its unique key must be hardcoded into <i>aus_core_configuration.php</i> file in your script and match values stored on PHP Auto Update Script server. If any of these values doesn't match, server will refuse to initialize download.<br><br> Sure, there are more verifications to ensure download was requested by original script, but all of them are automated and don't require any interaction from you or user.
                                              </div>
                                          </div>
                                      </div>
                                      <div class="panel box box-info fourth-box">
                                          <div class="box-header with-border">
                                              <h4 class="box-title">
                                                  <a data-toggle="collapse" data-parent="#faq" href="#collapse_faq4">Which file fields are mandatory?</a>
                                              </h4>
                                          </div>
                                          <div id="collapse_faq4" class="panel-collapse collapse">
                                              <div class="box-body text-justify">None. Since some developers use PHP Auto Update Script only to provide versioning functionality in their scripts, none of file fields are mandatory. As a result, it's possible to add new versions without uploading actual files. This method is useful if you want to provide update alerts in your scripts automatically, but keep actual updates manual.<br><br> If you use automatic installations and/or updates, you decide which files to store on PHP Auto Update Script server. For example, if you only need basic updates feature, storing <i>Upgrade Archive</i> with latest version files is enough. If your script is complex, you may want to store both upgrade files (<i>Upgrade Archive</i>) and MySQL query (<i>Upgrade MySQL Query</i>) separately and download them at different times, depending on the structure of your application. That is to say, you decide how application should work.
                                              </div>
                                          </div>
                                      </div>
                                      <div class="panel box box-info fourth-box">
                                          <div class="box-header with-border">
                                              <h4 class="box-title">
                                                  <a data-toggle="collapse" data-parent="#faq" href="#collapse_faq5">What are requirements for uploaded files?</a>
                                              </h4>
                                          </div>
                                          <div id="collapse_faq5" class="panel-collapse collapse">
                                              <div class="box-body text-justify">All uploaded files should be archived using a ZIP format and not password-protected. The maximum size for installation and/or upgrade archives is 100 MB per file, and maximum size for MySQL installation and/or upgrade queries is 1 MB per file.<br><br> Each archive will be downloaded and extracted into script's root directory on user's machine (existing files will be overwritten), so structure your archives accordingly. In other words, if there is <i>somefile.php</i> inside your script's root directory, the same file should be in archive's root, too.
                                              </div>
                                          </div>
                                      </div>
                                      <div class="panel box box-info fourth-box">
                                          <div class="box-header with-border">
                                              <h4 class="box-title">
                                                  <a data-toggle="collapse" data-parent="#faq" href="#collapse_faq6">What are differences between standard (*.zip) and raw MySQL queries?</a>
                                              </h4>
                                          </div>
                                          <div id="collapse_faq6" class="panel-collapse collapse">
                                              <div class="box-body text-justify">MySQL queries stored inside *.zip archives will be treated as files by updates engine. In order to execute particular query, updates engine will download and extract *.zip archive to script's root directory. Then, custom code inside script should be used to open extracted file, read its content and execute MySQL query on user's database.<br><br> Raw MySQL queries can be executed directly from PHP Auto Update Script server, without downloading them to user's machine. This option doesn't require any custom code and allows to execute desired queries on user's database in real time.<br><br> While raw MySQL queries are easier and faster to work with, standard (*.zip) queries offer additional security benefits. For example, author has ability to verify checksum of downloaded file before executing query on user's database, ensuring that query wasn't modified by 3rd parties. Additionally, some servers might identify raw queries as potential security risk; therefore, it's up to author to decide which option is better for his needs.<br><br> PHP Auto Update Script allows storing both (standard and raw) queries at the same time, so author can switch between them at any time.
                                              </div>
                                          </div>
                                      </div>
                                      <div class="panel box box-info fourth-box">
                                          <div class="box-header with-border">
                                              <h4 class="box-title">
                                                  <a data-toggle="collapse" data-parent="#faq" href="#collapse_faq7">What is maximum number of active versions used for?</a>
                                              </h4>
                                          </div>
                                          <div id="collapse_faq7" class="panel-collapse collapse">
                                              <div class="box-body text-justify">Most of developers maintain a limited number of versions at a time. For example, if application has versions 1.0, 2.0 and 3.0, v1.0 support might be discontinued after v4.0 is released. In this case, author supports three versions at a time. Therefore, if someone requests for v1.0 support, author will ask him to upgrade first.<br><br> PHP Auto Update Script automates it by marking old releases as expired with each update. For example, if active versions limit is set to 3 and product has versions 1.0, 2.0 and 3.0, v1.0 will be automatically set as expired right after v4.0 is released. Once v5.0 is released, PHP Auto Update Script will disable v2.0, and so on. If user tries to deploy an expired version, installer will prompt him to download one of supported releases.<br><br> Be aware that overwriting an existing number of active versions will only affect future changes. For example, if product has versions 1.0, 2.0, 3.0 and 4.0, while maximum number of supported versions is set to two (so versions 1.0 and 2.0 are disabled), setting this limit to three will not re-activate version 2.0. However, once new version 5.0 is added, version 3.0 will be kept active, so the total number of supported versions is three now.
                                              </div>
                                          </div>
                                      </div>
                                      <div class="panel box box-info fourth-box">
                                          <div class="box-header with-border">
                                              <h4 class="box-title">
                                                  <a data-toggle="collapse" data-parent="#faq" href="#collapse_faq8">What is version expiration date for?</a>
                                              </h4>
                                          </div>
                                          <div id="collapse_faq8" class="panel-collapse collapse">
                                              <div class="box-body text-justify">Individual version expiration is used to set a date after which new installations and/or upgrades of a particular version will be unavailable.<br><br> This feature is essential for developers who maintain each release for a certain period of time, after which users should upgrade. For instance, if a particular version expires on 2023-03-25, users won't be able to install it after specified date. That is to say, installer will display a notification that version expired and user should get the latest version.
                                              </div>
                                          </div>
                                      </div>
                                      <div class="panel box box-info fourth-box">
                                          <div class="box-header with-border">
                                              <h4 class="box-title">
                                                  <a data-toggle="collapse" data-parent="#faq" href="#collapse_faq9">How does installations and/or upgrades limit work?</a>
                                              </h4>
                                          </div>
                                          <div id="collapse_faq9" class="panel-collapse collapse">
                                              <div class="box-body text-justify">PHP Auto Update Script can limit the number of installations and/or upgrades for each version. Once the total number of installations reaches a specified number, a particular version expires.<br><br> Just as you would expect, the total number of installations and/or upgrades is calculated for successful downloads only. In other words, if user unsuccessfully tries to install a script for 10 times, the total number of installations will remain the same. And vice-versa: if user will successfully re-installs script again and again, the number of performed installations will be increased.
                                              </div>
                                          </div>
                                      </div>
                                      <div class="panel box box-info fourth-box">
                                          <div class="box-header with-border">
                                              <h4 class="box-title">
                                                  <a data-toggle="collapse" data-parent="#faq" href="#collapse_faq10">How do verified updates work?</a>
                                              </h4>
                                          </div>
                                          <div id="collapse_faq10" class="panel-collapse collapse">
                                              <div class="box-body text-justify">In brief, this option ensures that only verified installations will receive updates. A verified installation is the one performed right from your script on user's machine and hashed on PHP Auto Update Script server. Hence, if someone transfers application files to another machine, such installation is not verified. For this reason, script will block updates for this user. However, if someone purchased your script and asked for a refund later, he still owns the original script. In other words, this user can still download updates.<br><br> Use PHP Auto Update Script along with 
                                                  <a href="https://codecanyon.net/item/auto-php-licenser/19720092" title="Auto PHP Licenser" target="_blank">Auto PHP Licenser</a> to ensure only paid clients install and run your applications. Initialize license verification before calling any of PHP Auto Update Script functions and code execution will only occur if user's license is valid and active. Verification is performed on your server where Auto PHP Licenser is installed and only succeeds when license is valid and meets other requirements, such as domain, IP address, installation path, etc. Put simply, there's no way for user to bypass or fake this check.<br><br> If that's not enough, Auto PHP Licenser can automatically delete your script files from user's machine if illegal license key is detected. Furthermore, it will also delete all the other files (if any) located in the same directory where your script is installed and will drop all data from user's MySQL database. It will be the last time someone tries to use your script without owning a valid license!</div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="box box-primary">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="box box-solid">
                              <div class="box-header with-border">
                                  <h3 class="box-title">Troubleshooting</h3>
                              </div>
                              <div class="box-body">
                                  <div class="box-group" id="troubleshooting">
                                      <div class="panel box box-default">
                                          <div class="box-header with-border">
                                              <h4 class="box-title">
                                                  <a data-toggle="collapse" data-parent="#troubleshooting" href="#collapse_troubleshooting1">Some versions can't be added or updated</a>
                                              </h4>
                                          </div>
                                          <div id="collapse_troubleshooting1" class="panel-collapse collapse">
                                              <div class="box-body text-justify">If PHP Auto Update Script doesn't display any errors, but some versions still can't be added or updated, the issue might be related to one of these causes:<br><br> 1. Some security module (like mod_security, rules in .htaccess, firewall etc.) blocks potentially insecure data. This might be especially true when raw MySQL queries are used because they usually contain lots of suspicious data. Even if your raw MySQL query is 100% safe, most security modules will treat it as security risk and instantly block it. If you can add new version without entering raw MySQL query, it confirms the issue is related to your server setup.<br> 2. Some security module (like file scanner, antivirus software, etc.) blocks ZIP archives because of potential security threats. This might be especially true when JavScript or other executable files are stored inside ZIP archive. If you can add new version without uploading ZIP archives, it confirms the issue is related to your server setup.<br><br> With this in mind, none of these issues is related to PHP Auto Update Script; therefore, it's your server administrator's responsibility to find the exact cause and adjust server configuration accordingly.
                                              </div>
                                          </div>
                                      </div>
                                      <div class="panel box box-default">
                                          <div class="box-header with-border">
                                              <h4 class="box-title">
                                                  <a data-toggle="collapse" data-parent="#troubleshooting" href="#collapse_troubleshooting2">Record can't be added or updated</a>
                                              </h4>
                                          </div>
                                          <div id="collapse_troubleshooting2" class="panel-collapse collapse">
                                              <div class="box-body text-justify">If error message '<i>Invalid record details, duplicated data, or database error</i>' is displayed when adding new or updating existing record, it means this record is already stored in database. For example, it may happen when adding a new product that uses the same SKU as another product, adding a new version of the same product with the same version number again, and so on. In other words, this error prevents you from adding duplicated data to you database; therefore, double-check record details and fix them accordingly.
                                              </div>
                                          </div>
                                      </div>
                                      <div class="panel box box-default">
                                          <div class="box-header with-border">
                                              <h4 class="box-title">
                                                  <a data-toggle="collapse" data-parent="#troubleshooting" href="#collapse_troubleshooting3">Some callbacks and/or reports don't display product name or version number</a>
                                              </h4>
                                          </div>
                                          <div id="collapse_troubleshooting3" class="panel-collapse collapse">
                                              <div class="box-body text-justify">This only might happen when invalid product ID is hardcoded into script on user's machine, or script is trying to download a version which doesn't exist. In both cases, it's solely developer's mistake, which can be fixed by re-configuring script properly.
                                              </div>
                                          </div>
                                      </div>
                                      <div class="panel box box-default">
                                          <div class="box-header with-border">
                                              <h4 class="box-title">
                                                  <a data-toggle="collapse" data-parent="#troubleshooting" href="#collapse_troubleshooting4">Script can't be installed or upgraded because of invalid signature</a>
                                              </h4>
                                          </div>
                                          <div id="collapse_troubleshooting4" class="panel-collapse collapse">
                                              <div class="box-body text-justify">The most common issue of invalid signature is inaccurate time on your server (where PHP Auto Update Script is installed) and/or inaccurate time on user's machine (where your script is installed). It doesn't matter which timezone is used, but operating system time must always be accurate. For example, if actual time in your timezone is 2021-03-25 07:20, but computer has wrong time set to 2021-03-25 08:20, script signature might be identified as invalid; therefore, make sure system time is accurate.<br><br>The same error might also occur when product security key was modified via PHP Auto Update Script administration dashboard, but key hardcoded into script was not updated.
                                              </div>
                                          </div>
                                      </div>
                                      <div class="panel box box-default">
                                          <div class="box-header with-border">
                                              <h4 class="box-title">
                                                  <a data-toggle="collapse" data-parent="#troubleshooting" href="#collapse_troubleshooting5">'Warning: POST Content-Length exceeds the limit' error message is displayed</a>
                                              </h4>
                                          </div>
                                          <div id="collapse_troubleshooting5" class="panel-collapse collapse">
                                              <div class="box-body text-justify">This error message comes right from server where PHP Auto Update Script is installed and indicates that server doesn't allow uploading such big files.<br<br> Even if PHP Auto Update Script itself supports uploads of up to 100 MB per file, it's possible hosting server has lower limits set. For example, if server has PHP values <i>post_max_size</i> and/or <i>upload_max_filesize</i> set to 8 MB (default PHP limit), uploading bigger files will fail. The limit can only be adjusted by server administrator; therefore, contact your hosting provider for further assistance.</br<br>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
    </div>
       
      
    
<div class="row">
    <div class="col-lg-12">
  <footer class="main-footer">
    <strong><a href="#" style="color: #007bff;">Php Auto Update Script</a></strong>-Automatically Install and Update PHP Scripts
   
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




