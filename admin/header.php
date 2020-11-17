<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>Quản Lý Bán Hàng - Dashboard</title>
  <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="/css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <!-- <div class="sidebar-brand-icon">
          <img src="img/logo/logo.jpg" width="70px" height="100px">
        </div> -->
        <div class="sidebar-brand-text mx-3">TiMi Store.Shop</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Danh Mục
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Pos Bán Hàng</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Bootstrap UI</h6>
            <a class="collapse-item" href="alerts.php">Alerts</a>
            <a class="collapse-item" href="buttons.php">Buttons</a>
            <a class="collapse-item" href="dropdowns.php">Dropdowns</a>
            <a class="collapse-item" href="modals.php">Modals</a>
            <a class="collapse-item" href="popovers.php">Popovers</a>
            <a class="collapse-item" href="progress-bar.php">Progress Bars</a>
          </div>
        </div>
      </li>
      <!-- nhân viên -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="employees/employee.php" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
          aria-controls="collapseForm">
          <i class="fas fa-user-friends"></i><span class="app-menu__label ml-2">Nhân Viên</span>
        </a>
        <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Thông Tin Nhân Viên</h6>
            <a class="collapse-item" href="employee.php">Danh Sách Nhân Viên</a>
          </div>
        </div>
      </li>
      <!-- đơn hàng -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-shopping-cart"></i><span class="app-menu__label ml-2">Đơn Hàng</span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Tables</h6>
            <a class="collapse-item" href="listorder.php">Đơn Đặt Mua Hàng</a>
            <a class="collapse-item" href="#">Đơn Hàng Đã Bán</a>
          </div>
        </div>
      </li>
      <!-- sản phẩm -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTabl" aria-expanded="true"
          aria-controls="collapseTabl">
          <i class="fas fa-align-justify"></i><span class="app-menu__label ml-2">Sản Phẩm</span>
        </a>
        <div id="collapseTabl" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Tables</h6>
            <a class="collapse-item" href="listcategory.php">Thể Loại</a>
            <a class="collapse-item" href="Listpicture.php">Hình Ảnh</a>
            <a class="collapse-item" href="Listproduct.php">Danh Sách Sản Phẩm</a>
          </div>
        </div>
      </li>

      
        <!-- khách hàng -->
      <li class="nav-item">
        <a class="nav-link" href="customer.php">
        <i class="far fa-address-card"></i><span class="app-menu__label ml-2">Khách Hàng</span>
        </a>
      </li>
        <!-- nhập kho -->
      <li class="nav-item">
        <a class="nav-link" href="#">
        <i class="fas fa-truck-moving"></i></i><span class="app-menu__label ml-2">Nhập Kho</span>        
      </a>
      </li>
      <!-- tồn kho -->
      <li class="nav-item">
        <a class="nav-link" href="#">
        <i class="fas fa-book"></i></i><span class="app-menu__label ml-2">Tồn Kho</span>        
      </a>
      </li>
      <!-- doanh số -->
      <li class="nav-item">
        <a class="nav-link" href="#">
        <i class="fa fa-signal"></i><span class="app-menu__label ml-2">Doanh Số</span> 
        </a>
      </li>
      <!-- lợi nhuận -->
      <li class="nav-item">
        <a class="nav-link" href="#">
        <i class="fas fa-dollar-sign"></i><span class="app-menu__label ml-2">Lợi Nhuận</span>      
      </a>
      </li>

      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Examples
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
          aria-controls="collapsePage">
          <i class="fas fa-fw fa-columns"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Example Pages</h6>
            <a class="collapse-item" href="login.php">Login</a>
            <a class="collapse-item" href="register.php">Register</a>
            <a class="collapse-item" href="blank.php">Blank Page</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="charts.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span>
        </a>
      </li>
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-1 small" placeholder="What do you want to look for?"
                      aria-label="Search" aria-describedby="basic-addon2" style="border-color: #3f51b5;">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
         

            
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="img/boy.png" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small">Xin Chào Admin</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Trang Cá Nhân
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Cài Đặt
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Nhật Kí Hoạt Động
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Đăng Xuất
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
          </div>   
          </div> 

        