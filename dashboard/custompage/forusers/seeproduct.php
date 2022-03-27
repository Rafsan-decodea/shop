
<?php 

session_start();
 error_reporting(0); 
// This is dashboard
include ($_SERVER['DOCUMENT_ROOT']."/shop/database/db.php");
$db  = new DB();

if (!isset($_SESSION["id"]))
{
   header("location:/shop/index.php");

}


if($_SESSION["uid"]==1)
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
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
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
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> -->

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <a href="../../logout.php" style="color:red" class="nav-link">logout</a>
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item d-none d-sm-inline-block">
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <div class="media-body">
                <h3 class="dropdown-item-title">
               
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
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
          <a href="#" class="d-block"> <?php echo $_SESSION["fristname"]   ?>  As Users </a>
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
            <a href="../../index.php" class="nav-link ">
              <i class="nav-icon fab fa-500px"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="seeproduct.php" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
                See Products
               
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
            <h1 class="m-0">Place Order </h1>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
         Make A Order 
     </button>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <?php
     //ini_set('display_errors', 1); 
    //  $sql = "SELECT * FROM `shop_products`";
    //  $result = $db->query($sql);

    //  while ( $row  = $result->fetch_assoc())
    //  {
    //   echo $row["productname"];
    //   echo $row["price"];
    //   die();
    //  }

?>
  <!--  Modal Started  -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Make a Order </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<?php
     //ini_set('display_errors', 1); 
     $sql = "SELECT DISTINCT productname FROM `shop_products`";
     $result = $db->query($sql);

?>

   <div class="form-group">
      <label for="exampleInputEmail1">Select Products</label> 
      <br>
      <select id="productnameid" onchange="getproductdata(this);">
      <option  selected disabled >Select Option Name</option>
      <?php  while ( $row  = $result->fetch_assoc()){  ?>
      <option data-tokens="ketchup mustard"><?php echo $row["productname"];?></option>
      <?php } $result->free();?>productname
    </select>
  <br><br>
    <label for="exampleInputEmail1">Select Brand</label> 
      <br>
      <select id="productBrand">
      
      </select>
    <br><br>
    <div class="form-group">
      <label for="exampleInputEmail1">How Many</label>
      <input type="number" class="form-control" name="number" id="quantity" aria-describedby="emailHelp" Name placeholder="How Many">
   </div>


   </div>
   
   <button  onclick="addOrder();"   class="btn btn-primary">Submit</button>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> 

  <!-- Add   a Order Script  -->

  <script>
    
     function addOrder()
     {
       var  productname = $("#productnameid").val();
       var  productbrand =  $("#productBrand").val().split(',')[0];//smart Idea for Split
       var  quantity = $("#quantity").val();
      
       $.ajax({
            url : "action.php",
            type : 'post',
            data : {
              orderproductSend :productname,
              orderproductbrandSend: productbrand,
              orderquantitySend: quantity
              
            },
            success:function(data,status)
            {
               
              toastr.success("Product Order Success ");
           
            }
            
          });

        

     }
 
 </script>


    <!-- Main content -->
<section class="content">

 <!-- Java Script For On Change For Select Options  -->

 <script>

function getproductdata(product)
{
    var product = product.value;

    $.ajax({
            url : "action.php",
            type : 'post',
            data : {
              productSend :product,
              
            },
            success:function(data,status)
            {
               
              // alert(typeof(data));
                  // toastr.error("Email Id Exist");
               var $dropdown = $("#productBrand");
               var fetchdata = JSON.parse(data);
               $('#productBrand').html("");
               for (let i=0; i<fetchdata.length ; i++)
               {
                $dropdown.append($("<option />").val(fetchdata[i]).text(fetchdata[i]+"TK"));
               }
              
            }
            
          });
}

 </script>
  
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
  
  
  <h1 class="m-0">ᴘᴇɴᴅɪɴɢ ᴏʀᴅᴇʀꜱ </h1>
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
        ini_set('display_errors', 1); 
        $userid = $_SESSION["id"]; // Find User id For 
       $sql = "select * from shop_orders where acceptrequest = 1 && userid= $userid";
       $result = $db->query($sql);
      // while ( $row  = $result->fetch_assoc())
      // {
      //   echo $row["productid"];
       
      // }

   ?>

  </thead>
  <tbody>
  <?php  while ( $row  = $result->fetch_assoc()) { ?>
    <tr>
      <th scope="row"><?php echo $numbers += 1 ;?></th>
      <td><?php $userid = $row["userid"];$data = $db->query("select fristname from shop_users where id = $userid ");  while ( $row1  = $data->fetch_assoc()){ echo $row1["fristname"];} $data->free(); ?></td>
      <td><?php $productid = $row["productid"]; $data = $db->query("select productname from shop_products where id = $productid ");  while ( $row1  = $data->fetch_assoc()){ echo $row1["productname"];}  $data->free();?></td>
      <td><?php  $data = $db->query("select modelname from shop_products where id = $productid ");while ( $row1  = $data->fetch_assoc()){ echo $row1["modelname"];} $data->free(); ?></td>
      <td><?php  $data=  $db->query("select price from shop_products where id = $productid "); while ( $row1  = $data->fetch_assoc()){ echo $row1["price"];} $data->free(); ?>(MPR)</td>
      <td><?php echo $row["quantity"]; ?> Pices</td>
      <td><?php echo $row["orderdate"]; ?></td>

      <td class="badge badge-warning" > Pending </td>
    </tr>  
    <?php } $result->free(); ?>
  </tbody>
  
</table>
  </div>
</div>

<h1 class="elegantshd"> ᴀᴘʀᴏᴠᴇ ᴏʀᴅᴇʀ </h1>
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
      <th scope="col">Order Approve Data </th>
      <th scope="col">Status</th>
    </tr>
    <?php 
        //ini_set('display_errors', 1); 
        $userid = $_SESSION["id"]; // Find User id For 
        $sql = "select * from shop_orders where acceptrequest = 0 && userid= $userid";
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
      <td><?php echo $row["orderaprovedate"]; ?></td>
      <td class="badge badge-primary">Aproved</td>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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


?>