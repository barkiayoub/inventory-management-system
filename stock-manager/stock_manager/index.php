<?php
session_start();
if (!isset($_SESSION['email'])) {
   header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">

   <meta name="robots" content="noindex, nofollow">
   <meta content="" name="description">
   <meta content="" name="keywords">
   <link href="assets/img/favicon.png" rel="icon">
   <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
   <link href="https://fonts.gstatic.com" rel="preconnect">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
   <link href="assets/css/bootstrap.min.css" rel="stylesheet">
   <link href="assets/css/bootstrap-icons.css" rel="stylesheet">
   <link href="assets/css/boxicons.min.css" rel="stylesheet">
   <link href="assets/css/quill.snow.css" rel="stylesheet">
   <link href="assets/css/quill.bubble.css" rel="stylesheet">
   <link href="assets/css/remixicon.css" rel="stylesheet">
   <link href="assets/css/simple-datatables.css" rel="stylesheet">
   <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
   <header id="header" class="header fixed-top d-flex align-items-center">
      <div class="d-flex align-items-center justify-content-between"> <a href="index.html" class="logo d-flex align-items-center"> <img src="#" alt=""> <span class="d-none d-lg-block">Stock
               Manager</span> </a> <i class="bi bi-list toggle-sidebar-btn"></i></div>
      <div class="search-bar">
         <form class="search-form d-flex align-items-center" method="POST" action="#"> <input type="text" name="query" placeholder="Search" title="Enter search keyword"> <button type="submit" title="Search"><i class="bi bi-search"></i></button></form>
      </div>
      <nav class="header-nav ms-auto">
         <ul class="d-flex align-items-center">

            <li class="nav-item dropdown pe-3">
               <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                  <i class="bi bi-box-arrow-right"></i> <span class="d-none d-md-block dropdown-toggle ps-2"></span>
               </a>
               <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                  <li> <a class="dropdown-item d-flex align-items-center" href="logout.php"> <span>Log Out</span> </a></li>
               </ul>
            </li>
         </ul>
      </nav>
   </header>
   <aside id="sidebar" class="sidebar">
      <ul class="sidebar-nav" id="sidebar-nav">
         <li class="nav-item"> <a class="nav-link collapsed" href="dashboard.php"> <i class="bi bi-grid"></i>
               <span>Dashboard</span> </a></li>
         <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" href="showCat.php"> <i class="bi bi-menu-button-wide"></i><span>Categories</span>
            </a>

         </li>

         <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-journal-text"></i><span>Product</span><i class="bi bi-chevron-down ms-auto"></i> </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
               <li> <a href="showPro.php"> <i class="bi bi-circle"></i><span>Show Product</span> </a></li>
               <li> <a href="addPro.php"> <i class="bi bi-circle"></i><span>Add a Product</span> </a></li>
            </ul>
         </li>
         <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-layout-text-window-reverse"></i><span>Orders</span><i class="bi bi-chevron-down ms-auto"></i> </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
               <li> <a href="showOrders.php"> <i class="bi bi-circle"></i><span>Show Orders</span> </a></li>
               <li> <a href="addOrders.php"> <i class="bi bi-circle"></i><span>Add an Order</span> </a></li>
            </ul>
         </li>
         <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-menu-button-wide"></i><span>Costumers</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
               <li> <a href="showClient.php"> <i class="bi bi-circle"></i><span>Show costumers</span> </a></li>
               <li> <a href="addClient.php"> <i class="bi bi-circle"></i><span>Add a costumer</span> </a></li>
            </ul>
         </li>
         <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-bar-chart"></i><span>Distributor</span><i class="bi bi-chevron-down ms-auto"></i> </a>
            <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
               <li> <a href="showDistributor.php"> <i class="bi bi-circle"></i><span>Show Distributors</span> </a></li>
               <li> <a href="addDistributor.php"> <i class="bi bi-circle"></i><span>Add a Distributor</span> </a></li>
            </ul>
         </li>
         <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-gem"></i><span>Suplies</span><i class="bi bi-chevron-down ms-auto"></i> </a>
            <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
               <li> <a href="showSuplies.php"> <i class="bi bi-circle"></i><span>Show Supplies</span> </a></li>
               <li> <a href="addSuplies.php"> <i class="bi bi-circle"></i><span>Add Supply</span> </a></li>
            </ul>
         </li>

      </ul>
   </aside>
   <main>
      <section class="section">
         <div class="row">

         </div>
      </section>
   </main>

   <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
   <script src="assets/js/apexcharts.min.js"></script>
   <script src="assets/js/bootstrap.bundle.min.js"></script>
   <script src="assets/js/chart.min.js"></script>
   <script src="assets/js/echarts.min.js"></script>
   <script src="assets/js/quill.min.js"></script>
   <script src="assets/js/simple-datatables.js"></script>
   <script src="assets/js/tinymce.min.js"></script>
   <script src="assets/js/validate.js"></script>
   <script src="assets/js/main.js"></script>

</body>

</html>