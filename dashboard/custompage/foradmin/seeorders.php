
<?php 
error_reporting(0);
session_start();
include ($_SERVER['DOCUMENT_ROOT']."/shop/database/db.php");
$db  = new DB();

// This is dashboard

if (!isset($_SESSION["id"]))
{
   header("location:/shop/index.php");

}

if( $_SESSION["uid"]==0)
{

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DashBoard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../../dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> -->

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../logout.php" class="nav-link" style="color:red;" >logout</a>
      </li>
    </ul>

    <!-- Right navbar links -->
   
      <!-- Notifications Dropdown Menu -->
    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Shop Managment</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <!-- <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div> -->
        <div class="info">
          <a href="#" class="d-block"> <?php echo $_SESSION["fristname"]   ?> As  Admin</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="./../../index.php" class="nav-link">
            <i class="fa-solid fa-font-awesome"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="seemember.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                See Users 
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="seeproduct.php" class="nav-link ">
              <i class="nav-icon fas fa-th"></i>
              <p>
                See Products
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="seeorders.php" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
                See Orders 
              </p>
            </a>
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
            <h1 class="m-0">See Orders</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">See Members</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

    <section class="content">

    <style>
 #table-wrapper {
  position:relative;
}
#table-scroll {
  height:150px;
  overflow:auto;  
  margin-top:20px;
}
#table-wrapper table {
  width:100%;

}
#table-wrapper table * {

  color:black;
}
#table-wrapper table thead th .text {
  position:absolute;   
  top:-20px;
  z-index:2;
  height:20px;
  width:35%;
  border:1px solid red;
}
  </style>
<h1 class="elegantshd">  ᴏʀᴅᴇʀ </h1>
   <div id="table-wrapper">
     <div id="table-scroll">
      <table class="table">
        <thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Seller name </th>
      <th scope="col">Product name </th>
      <th scope="col">Product model </th>
      <th scope="col">Product Per Prize </th>
      <th scope="col">Product quantity </th>
      <th scope="col">Order Date </th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
    <?php 
       // ini_set('display_errors', 1); 
       $sql = "select * from shop_orders where acceptrequest = 1";
       $result = $db->query($sql);
   ?>

  </thead>
  <tbody>
  <?php  while ( $row  = $result->fetch_assoc()) { ?>
    <tr>
    <th scope="row"><?php echo $number += 1 ;?></th>
      <td><?php $userid = $row["userid"];$data = $db->query("select fristname from shop_users where id = $userid ");  while ( $row1  = $data->fetch_assoc()){ echo $row1["fristname"];} $data->free(); ?></td>
      <td><?php $productid = $row["productid"]; $data = $db->query("select productname from shop_products where id = $productid ");  while ( $row1  = $data->fetch_assoc()){ echo $row1["productname"];}  $data->free();?></td>
      <td><?php  $data = $db->query("select modelname from shop_products where id = $productid ");while ( $row1  = $data->fetch_assoc()){ echo $row1["modelname"];} $data->free(); ?></td>
      <td><?php  $data=  $db->query("select price from shop_products where id = $productid "); while ( $row1  = $data->fetch_assoc()){ echo $row1["price"];} $data->free(); ?>(MPR)</td>
      <td><?php echo $row["quantity"]; ?> Pices</td>
      <td><?php echo $row["orderdate"]; ?></td>
      <td class="badge badge-warning">Pending</td>
      <td> <button class="btn btn-info" data-toggle="modal" onclick="confromUpdate(<?php echo $row["id"] ?>)" data-target="#exampleModal2" >Approve</button> </td>
      <td> <button class="btn btn-danger" onclick="conformdelete(<?php echo $row["id"] ?>);" >Delete</button> </td>
    </tr>  
    <?php } $result->free(); ?>
  </tbody>
</table>
  </div>
</div>

<!-- Update  aprove Status  -->
<script>

 function confromUpdate(orderid)
 {

  var result = confirm("Are You Want to Aprove this "+orderid+" ?");
  if(result)
  {
    getUpdateDetails(orderid)
  }
  else
  {
    toastr.error("NO");
  }

 }

 function getUpdateDetails(orderid)
  {

    $.ajax({
        url : "action.php",
        type : 'post',
        data : {
              updateidSend:orderid,
          },

      success: function (data,status)
      {
       
       
          toastr.info("Please reload The Page For See Effect");
          toastr.success("Data Update Successfully ");
   
      }

    
   });
       
  }
 

</script>


<h1 class="elegantshd">  ᴏʀᴅᴇʀ </h1>
   <div id="table-wrapper">
     <div id="table-scroll">
      <table class="table">
        <thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Seller name </th>
      <th scope="col">Product name </th>
      <th scope="col">Product model </th>
      <th scope="col">Product Per Prize </th>
      <th scope="col">Product quantity </th>
      <th scope="col">Order Date </th>
      <th scope="col">Status</th>
    </tr>
    <?php 
       // ini_set('display_errors', 1); 
       $sql = "select * from shop_orders where acceptrequest = 0";
       $result = $db->query($sql);
   ?>

  </thead>
  <tbody>
  <?php  while ( $row  = $result->fetch_assoc()) { ?>
    <tr>
    <th scope="row"><?php echo $number += 1 ;?></th>
      <td><?php $userid = $row["userid"];$data = $db->query("select fristname from shop_users where id = $userid ");  while ( $row1  = $data->fetch_assoc()){ echo $row1["fristname"];} $data->free(); ?></td>
      <td><?php $productid = $row["productid"]; $data = $db->query("select productname from shop_products where id = $productid ");  while ( $row1  = $data->fetch_assoc()){ echo $row1["productname"];}  $data->free();?></td>
      <td><?php  $data = $db->query("select modelname from shop_products where id = $productid ");while ( $row1  = $data->fetch_assoc()){ echo $row1["modelname"];} $data->free(); ?></td>
      <td><?php  $data=  $db->query("select price from shop_products where id = $productid "); while ( $row1  = $data->fetch_assoc()){ echo $row1["price"];} $data->free(); ?>(MPR)</td>
      <td><?php echo $row["quantity"]; ?> Pices</td>
      <td><?php echo $row["orderdate"]; ?></td>
      <td class="badge badge-primary">Approved</td>
    </tr>  
    <?php } $result->free(); ?>
  </tbody>
</table>
  </div>
</div>




    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../plugins/moment/moment.min.js"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../dist/js/pages/dashboard.js"></script>
</body>
</html>



<?php 

}

else
{
    echo "No Premssion View This ";
}

?>



