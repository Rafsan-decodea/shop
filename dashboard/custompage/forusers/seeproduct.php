
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
          <a href="#" class="d-block"> <?php echo $_SESSION["fristname"]   ?>  As Seller </a>
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
              <li class="breadcrumb-item"><a href="/">Home</a></li>
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
      <th scope="col">Invoice </th>
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
      <td><?php $userid = $row["userid"];$data = $db->query("select fristname from shop_users where id = $userid ");  while ( $row1  = $data->fetch_assoc()){ $fristname= $row1["fristname"]; echo $fristname;} $data->free(); ?></td>
      <?php $data = $db->query("select location from shop_users where id = $userid ");  while ( $row1  = $data->fetch_assoc()){ $location= $row1["location"]; } $data->free();?>
      <?php $data = $db->query("select email from shop_users where id = $userid ");  while ( $row1  = $data->fetch_assoc()){ $email = $row1["email"];} $data->free(); // Fetch Email id?> 
      <td><?php $productid = $row["productid"]; $data = $db->query("select productname from shop_products where id = $productid ");  while ( $row1  = $data->fetch_assoc()){ $productname= $row1["productname"]; echo $productname;}  $data->free();?></td>
      <td><?php  $data = $db->query("select modelname from shop_products where id = $productid ");while ( $row1  = $data->fetch_assoc()){ $productmodel= $row1["modelname"]; echo $productmodel;} $data->free(); ?></td>
      <td><?php  $data=  $db->query("select price from shop_products where id = $productid "); while ( $row1  = $data->fetch_assoc()){  $prices= $row1["price"]; echo  $prices;} $data->free(); ?>(MPR)</td>
      <td><?php echo $row["quantity"]; ?> Pices</td>
      <td><?php echo $row["orderdate"]; ?></td>
      <td><?php echo $row["orderaprovedate"]; ?></td>
      <td><a data-toggle="modal" data-target="#modal" onclick="load('<?php echo $fristname ?>','<?php echo $location ?>','<?php echo $email ?>','<?php echo $row["orderaprovedate"]; ?>','<?php echo $productname; ?>','<?php echo $productmodel; ?>','<?php echo $row["quantity"]; ?>','<?php echo $prices; ?>');"  href="#"> Show Invoice </a></td>
      <td class="badge badge-primary">Aproved</td>
    </tr>  
    <?php } $result->free(); ?>
  </tbody>
</table>
  </div>
</div>

<script>
function load(fristname,location,email,orderaprovedate,productname,modelname,quantity,prices)
   {
     //8002

     // alert(quantity*prices);
      document.getElementById("invoiceName").innerHTML = fristname;
      document.getElementById("invoiceAddress").innerHTML = location;
      document.getElementById("invoiceEmail").innerHTML = email;
      document.getElementById("invoiceAproveData").innerHTML = "data: "+orderaprovedate;
      document.getElementById("invoiceDetails").innerHTML = productname+" Model -> "+modelname ;
      document.getElementById("invoicePerPrice").innerHTML = "Per Pices Prices ৳"+prices;
      document.getElementById("invoiceQuantity").innerHTML = quantity;
      document.getElementById("invoiceTotal").innerHTML = "Total ৳"+quantity*prices;
      document.getElementById("invoiceGrandTotal").innerHTML = "Total ৳"+quantity*prices;



      //invoicePerPrice
      //invoiceTotal
      //invoiceGrandTotal
   }

</script>


<div class="modal fade text-center" id="modal">
            <div class="modal-dialog" style="max-width: 100%;" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <!-- Main BOdy -->
                    <div class="modal-body">
                     
                    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<style>
    #invoice{
    padding: 30px;
}

.invoice {
    position: relative;
    background-color: #FFF;
    min-height: 680px;
    padding: 15px
}

.invoice header {
    padding: 10px 0;
    margin-bottom: 20px;
    border-bottom: 1px solid #3989c6
}

.invoice .company-details {
    text-align: right
}

.invoice .company-details .name {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .contacts {
    margin-bottom: 20px
}

.invoice .invoice-to {
    text-align: left
}

.invoice .invoice-to .to {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .invoice-details {
    text-align: right
}

.invoice .invoice-details .invoice-id {
    margin-top: 0;
    color: #3989c6
}

.invoice main {
    padding-bottom: 50px
}

.invoice main .thanks {
    margin-top: -100px;
    font-size: 2em;
    margin-bottom: 50px
}

.invoice main .notices {
    padding-left: 6px;
    border-left: 6px solid #3989c6
}

.invoice main .notices .notice {
    font-size: 1.2em
}

.invoice table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    margin-bottom: 20px
}

.invoice table td,.invoice table th {
    padding: 15px;
    background: #eee;
    border-bottom: 1px solid #fff
}

.invoice table th {
    white-space: nowrap;
    font-weight: 400;
    font-size: 16px
}

.invoice table td h3 {
    margin: 0;
    font-weight: 400;
    color: #3989c6;
    font-size: 1.2em
}

.invoice table .qty,.invoice table .total,.invoice table .unit {
    text-align: right;
    font-size: 1.2em
}

.invoice table .no {
    color: #fff;
    font-size: 1.6em;
    background: #3989c6
}

.invoice table .unit {
    background: #ddd
}

.invoice table .total {
    background: #3989c6;
    color: #fff
}

.invoice table tbody tr:last-child td {
    border: none
}

.invoice table tfoot td {
    background: 0 0;
    border-bottom: none;
    white-space: nowrap;
    text-align: right;
    padding: 10px 20px;
    font-size: 1.2em;
    border-top: 1px solid #aaa
}

.invoice table tfoot tr:first-child td {
    border-top: none
}

.invoice table tfoot tr:last-child td {
    color: #3989c6;
    font-size: 1.4em;
    border-top: 1px solid #3989c6
}

.invoice table tfoot tr td:first-child {
    border: none
}

.invoice footer {
    width: 100%;
    text-align: center;
    color: #777;
    border-top: 1px solid #aaa;
    padding: 8px 0
}

@media print {
    .invoice {
        font-size: 11px!important;
        overflow: hidden!important
    }

    .invoice footer {
        position: absolute;
        bottom: 10px;
        page-break-after: always
    }

    .invoice>div:last-child {
        page-break-before: always
    }
}
</style>

<!--Author      : @arboshiki-->
<div id="invoice">

    <div class="toolbar hidden-print">
        <div class="text-right">
            <button id="printInvoice" class="btn btn-info"><i class="fa fa-print"></i> Print or Save PDF</button>
            <!-- <button class="btn btn-info"><i class="fa fa-file-pdf-o"></i> Export as PDF</button> -->
        </div>
        <hr>
    </div>
    <div class="invoice overflow-auto">
        <div style="min-width: 600px">
            <header>
                <div class="row">
                    <div class="col">
                        <a target="_blank" href="https://lobianijs.com">
                            <!-- <img src="http://lobianijs.com/lobiadmin/version/1.0/ajax/img/logo/lobiadmin-logo-text-64.png" data-holder-rendered="true" /> -->
                            </a>
                    </div>
                    <div class="col company-details">
                        <h2 class="name">
                            <a target="_blank">
                            Invoice Generate From Shop Management System
                            </a>
                        </h2>
                        <div>Oxyzen Chittagong (admin)</div>
                        <div>018181444463</div>
                        <div>shazidno123@gmail.com</div>
                    </div>
                </div>
            </header>
            <main>
                <div class="row contacts">
                    <div class="col invoice-to">
                        <div class="text-gray-light">INVOICE TO:</div>
                        <h2 class="to" id="invoiceName"></h2>
                        <div class="address" id="invoiceAddress"></div>
                        <div class="email" id="invoiceEmail"></div>
                    </div>
                    <div class="col invoice-details">
                        <h1 class="invoice-id">INVOICE</h1> <!--  -->
                        <div class="date" id="invoiceAproveData"></div>
                    </div>
                </div>
                <table border="0" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th class="text-left">DESCRIPTION</th>
                            <th class="text-right">Per PRICE</th>
                            <th class="text-right">Quantity</th>
                            <th class="text-right">TOTAL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="no">01</td>
                            <td class="text-left" id="invoiceDetails"><h3> </td>
                            <td class="unit"id="invoicePerPrice"></td>
                            <td class="qty"id="invoiceQuantity"></td>
                            <td class="total" id="invoiceTotal"></td>
                        </tr>
                
                    </tbody>
                    <tfoot>
                
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">GRAND TOTAL</td>
                            <td id="invoiceGrandTotal"></td>
                        </tr>
                    </tfoot>
                </table>
                <!-- <div class="thanks">Thank you!</div> -->
                <div class="notices">
                    <div>NOTICE:</div>
                    <div class="notice"> This Pdf have to save from Print Section</div>
                </div>
            </main>
            <footer>
                Invoice was created on a computer and is valid without the signature and seal.
            </footer>
        </div>
        <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
        <div></div>
    </div>
</div>

<script>

$('#printInvoice').click(function(){
            Popup($('.invoice')[0].outerHTML);
            function Popup(data) 
            {
                window.print();
                return true;
            }
        });
</script>

                




                    </div>
                    <!-- Modal Body end -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                    </div> 
                </div>
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