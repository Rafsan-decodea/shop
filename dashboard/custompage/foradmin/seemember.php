<?php 
session_start();

// This is dashboard
include ($_SERVER['DOCUMENT_ROOT']."/shop/database/db.php");
$db  = new DB();

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
          <a href="#" class="d-block"> <?php echo $_SESSION["fristname"]   ?>As  Admin</a>
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
              <i class="nav-icon fab fa-500px"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="seemember.php" class="nav-link  active">
              <i class="nav-icon fas fa-th"></i>
              <p>
                See Users 
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="seeproduct.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                See Products
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="seeorders.php" class="nav-link">
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
            <h1 class="m-0">See Members</h1>
                <!-- Button trigger modal -->
     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Add new Seller
     </button>
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



<!-- Adding User Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


   <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" name="email" id="emailid" aria-describedby="emailHelp" Name placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">Enter Your Email Id </small>
   </div>
   <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="password" class="form-control" id="passwordid" placeholder="Password">
   </div>
   <div class="form-group">
      <label for="exampleInputEmail1">Frist Name </label>
      <input type="text" class="form-control" name="fristname" id="fristnameid" aria-describedby="emailHelp" Name placeholder="Fristname">
      <small id="emailHelp" class="form-text text-muted">Enter Frist name </small>
   </div>

   <div class="form-group">
      <label for="exampleInputEmail1">LastName</label>
      <input type="text" class="form-control" name="lastname" id="lastnameid" aria-describedby="emailHelp" Name placeholder="Lastname">
      <small id="emailHelp" class="form-text text-muted">Enter Your Last Name</small>
   </div>

   <div class="form-group">
      <label for="exampleInputEmail1">Location</label>
      <input type="text" class="form-control" name="location" id="locationid" aria-describedby="emailHelp" Name placeholder="location">
      <small id="emailHelp" class="form-text text-muted">Enter Location </small>
   </div>
  
   <button  onclick="addSeller();" data-bind="<?php $email=  $var['email'];?>"  class="btn btn-primary">Submit</button>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>




<!--  java script for add New User  -->
  <script>
      function addSeller()
      {
          var email = $('#emailid').val();
          var password = $('#passwordid').val();
          var fristname= $('#fristnameid').val();
          var lastname = $('#lastnameid').val();
          var location = $('#locationid').val();

          $.ajax({
            url : "action.php",
            type : 'post',
            data : {
              emailSend : email,
              passwordSend: password,
              fristnameSend: fristname,
              lastnameSend: lastname,
              locationSend: location
            },
            success:function(data,status)
            {
              
                  // toastr.error("Email Id Exist");
               var fetchdata = JSON.parse(data);
              

               if(fetchdata.email == email)
               {
                toastr.error("Email Id Exist");
               
               }

               else{

              console.log(status);
              toastr.info("Please reload The Page For See Effect");
              toastr.success("success");
               }
              
            }
            
          });



      }

  </script>

    <!-- /.content-header -->

    <!-- Main content -->

    <section class="content">

    <?php 

     
     $sql = "select * from shop_users ";
     $result = $db->query($sql);

      echo $email;
    
    ?>
      
    <table class="table" id="editable_table">
  <thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">User Type</th>
      <th scope="col">email</th>
      <th scope="col">Fristname</th>
      <th scope="col">Lastname</th>
      <th scope="col">location</th>
      <th scope="col">ACtion</th>
    </tr>
  </thead>
  <tbody>

  <?php  while ( $row  = $result->fetch_assoc()) { ?>
    <tr>
    
      <td><?php echo $number += 1 ?></td>
      <td> <?php if($row["uid"]==0){ echo " Admin Seller ";} else{echo " Seller ";} ?> </td>
      <td><?php echo $row["email"]; if($row["uid"]==0){ echo " (Admin)";} ?></td>
      <td><?php echo $row["fristname"] ?></td>
      <td><?php echo $row["lastname"] ?></td>
      <td><?php echo $row["location"] ?></td>
      <td>
        <?php if($row["uid"]==1){  ?>
         <button class="btn btn-info" data-toggle="modal" onclick="getUpdateDetails(<?php echo $row["id"] ?>)" data-target="#exampleModal2" >Edit</button> 
         <button class="btn btn-danger" onclick="conformdelete(<?php echo $row["id"] ?>);" >Delete</button>
        <?php }else{ ?>
        
         <?php } ?>
      </td>


    </tr>
<?php } $result->free(); ?>

  </tbody>
</table>

<!-- Delete Script -->

  <script>

 function conformdelete(deleteuserid)
 {
  var result = confirm("Want to  delete?");
   
  if (result)
  {
    deleteuser(deleteuserid);// Cheking User is Deleted or not 

  }
  else
  {
    toastr.warning(" User not deleted ");
  }
  
 }
  
  function deleteuser(deleteuserid){
      $.ajax({
     
            url : "action.php",
            type : 'post',
            data : {
              deleteuseridSend : deleteuserid,
            },
           success: function(data,status)
           {
              
              toastr.success("User Deleted "+deleteuserid);
           }

      });
    }
  
  </script>

<!-- Uppdate User Modal  -->

<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


   <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" name="email" id="updateemailid" aria-describedby="emailHelp" Name placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">Enter Your Email Id </small>
   </div>
   <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="password" class="form-control" id="updatepasswordid" placeholder="Password">
   </div>
   <div class="form-group">
      <label for="exampleInputEmail1">Frist Name </label>
      <input type="text" class="form-control" name="fristname" id="updatefristnameid" aria-describedby="emailHelp" Name placeholder="Fristname">
      <small id="emailHelp" class="form-text text-muted">Enter Frist name </small>
   </div>

   <div class="form-group">
      <label for="exampleInputEmail1">LastName</label>
      <input type="text" class="form-control" name="lastname" id="updatelastnameid" aria-describedby="emailHelp" Name placeholder="Lastname">
      <small id="emailHelp" class="form-text text-muted">Enter Your Last Name</small>
   </div>

   <div class="form-group">
      <label for="exampleInputEmail1">Location</label>
      <input type="text" class="form-control" name="location" id="updatelocationid" aria-describedby="emailHelp" Name placeholder="location">
      <small id="emailHelp" class="form-text text-muted">Enter Location </small>
   </div>
  
   <button  onclick="updateuser();"  class="btn btn-primary">Update</button>
   <input type="hidden" id="hiddendata">


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

  <!-- Update  User Script   -->

  <script>
  
  function getUpdateDetails(userid)
  {
    $("#hiddendata").val(userid);
    
    $.post(
      "action.php",
      {
        userupdateid:userid,
      },
      function (data,status)
      {

        //alert(data);
       
        var fetchuserid  = JSON.parse(data);

        $("#updateemailid").val(fetchuserid.email);
        $("#updatepasswordid").val(fetchuserid.password);
        $("#updatefristnameid").val(fetchuserid.fristname);
        $("#updatelastnameid").val(fetchuserid.lastname);
        $("#updatelocationid").val(fetchuserid.location);
      }
      
    );
  }


  function updateuser()
  {
     var getuserid = $("#hiddendata").val();
     var email = $('#updateemailid').val();
     var password = $('#updatepasswordid').val();
     var fristname= $('#updatefristnameid').val();
     var lastname = $('#updatelastnameid').val();
     var location = $('#updatelocationid').val();

     $.ajax({
        url : "action.php",
        type : 'post',
        data : {
              updateidSend:getuserid,
              updateemailSend: email,
              updatepasswordSend: password,
              updatefristnameSend: fristname,
              updatelastnameSend: lastname,
              updatelocationSend: location
          },

      success: function (data,status)
      {

        toastr.info("Please reload The Page For See Effect");
        toastr.success("Data Update Successfully ");
         
      }

    
   });


  }
    

  </script>


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

<!-- <script src="https://raw.githubusercontent.com/markcell/jquery-tabledit/master/jquery.tabledit.min.js"></script> -->
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


