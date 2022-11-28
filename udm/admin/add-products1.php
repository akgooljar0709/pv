
<?php
include 'conn.php';

include_once('conn.php');
// Code user Registration
if(isset($_POST['submit']))
{
$pname=$_POST['pname'];
$desc=$_POST['description'];
$price=$_POST['price'];
$alt_img=$_POST['alt_img'];
$productimage1=$_FILES["image"]["name"];
$pathto="/productimages/".$productimage1;



$sql=mysqli_query($conn,"select id from products where name='$pname'");
$row=mysqli_num_rows($sql);
if($row>0)
{
    echo "<script>alert('Product id already exist . Please try with other email id');</script>";
} else{
    $msg=mysqli_query($conn,"insert into products(name,description,price,photo,alt_img) values('$pname','$desc','$price','$productimage1','$alt_img')");
    $query=mysqli_query($conn,"select max(id) as pid from products");
    $result=mysqli_fetch_array($query);
    $productid=$result['pid']+1;

    $dir="productimages/$productid";
  if(!is_dir($dir)){
      mkdir("productimages/".$productid);
    }

    move_uploaded_file($_FILES['image']['tmp_name'],"productimages/$productid/".$_FILES["image"]["name"]);

if($msg)
{
    echo "<script>alert('Registered successfully');</script>";
    echo "<script type='text/javascript'> document.location = 'products.php'; </script>";
}
}




}




?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Products</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include "include/leftsidebar.php" ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with minimal features & hover style</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <div class="row">

                    <div class="col-sm-6">
                        <h2>Manage <b>Products</b></h2>
                    </div>


                    <div class="col-sm-6">
                      <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Products</span></a>
                                
                    </div>

                </div>

            <div class="container">
<?php if (!empty($alert_msg)) {?>
        <div class="alert alert-success"><?php echo $alert_msg; ?></div>
<?php }?>
    <div class="info"></div>
         <form method="POST" name="insertproduct" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="pname" class="col-sm-3 col-form-label">Product Name</label>
                <div class="col-sm-7">
                <input type="text" name="pname" class="form-control" id="pname" placeholder="Product Name">
                </div>
            </div>


            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Category</label>
                <div class="col-sm-7">
                
                  <?php


                        ?>

                        <select class="form-control" name="catname" id="catname">
                          <option value="">Select Category</option>
                          <?php
                          $result = mysqli_query($conn,"SELECT * FROM category");
                          while($row = mysqli_fetch_array($result)) {
                          ?>
                            <option value="<?php echo $row["cat_id"];?>"><?php echo $row["cat_name"];?></option>
                          <?php
                          }
                          ?>
                        </select>

                </div>
            </div>


            <div class="form-group row">
                <label for="subcat" class="col-sm-3 col-form-label">Sub-Category</label>
                <div class="col-sm-7">
                
                 

                        <select class="form-control"  id="sub_category">
                        </select>

                </div>
            </div>
          
            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Price</label>
                <div class="col-sm-7">
                <input type="number"  name="price" class="form-control" id="price" placeholder="Price">
                </div>
            </div>


             <div class="form-group row">
                <label for="pro_img" class="col-sm-3 col-form-label">Product Image</label>
                <div class="col-sm-7">

                <input type="file" name="image" id="image" value="" required>

                </div>
            </div>


            <div class="form-group row">

                <label for="alt_img" class="col-sm-3 col-form-label">Alt Image</label>

                <div class="col-sm-7">
                  <input type="text"  name="alt_img" class="form-control" id="alt_img" placeholder="Image Description">
                </div>

            </div>


            <div class="form-group row">
                <label for="description" class="col-sm-3 col-form-label">Product Description</label>
                <div class="col-sm-7">
                <textarea cols="40" rows="5" name="description"></textarea>
                </div>
            </div>

            
            <div class="form-group row">
                <div class="col-sm-7">
                
                <input type="submit" name="submit" class="btn btn-success" value="SUBMIT" />
                </div>
            </div>
        </form>
    </div>
             
                
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.4
    </div>
    <strong>Copyright &copy; 2022 <a href="http://adminlte.io">Admin | Dashboard</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>


<script>
$(document).ready(function() {
  $('#catname').on('change', function() {
      var cat_id = this.value;
      $.ajax({
        url: "get_subcat.php",
        type: "POST",
        data: {
          cat_id: cat_id
        },
        cache: false,
        success: function(dataResult){
          $("#sub_category").html(dataResult);
        }
      });
    
    
  });
});
</script>




</body>
</html>
