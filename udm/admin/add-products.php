
<?php
        session_start();
        include 'conn.php';
        include_once('conn.php');
        if (!isset($_SESSION['aid'])) {
          header("Location:login.php");

          exit();
        }

 // mysql select query
$category = "SELECT * FROM `category`";

// for method 1

$result1 = mysqli_query($conn, $category);

// Code Insert Product
if(isset($_POST['submit']))
{
$pname=$_POST['pname'];
$desc=$_POST['description'];
$price=$_POST['price'];
$productimage1=$_FILES["image"]["name"];
$pathto="/img/".$productimage1;

$sql=mysqli_query($conn,"select id from product where product_name='$pname'");
$row=mysqli_num_rows($sql);
if($row>0)
{
    echo "<script>alert('Product id already exist . Please try with other email id');</script>";
} else{
    $msg=mysqli_query($conn,"insert into product(product_name,product_description,product_img,price) values('$pname','$desc','$productimage1','$price')");
    $query=mysqli_query($conn,"select max(id) as pid from product");
    $result=mysqli_fetch_array($query);
    $productid=$result['pid']+1;

    $dir="/img/$productid";
  if(!is_dir($dir)){
      mkdir("/img/productimages/".$productid);
    }

    move_uploaded_file($_FILES['image']['tmp_name'],"/img/$productid/".$_FILES["image"]["name"]);

if($msg)
{
    echo "<script>alert('Registered successfully');</script>";
    echo "<script type='text/javascript'> document.location = 'manage-products.php'; </script>";
}
}




}




?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">

	<title>AdminHub</title>
	<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=email], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}


  </style>
</head>
<body>


	<!-- SIDEBAR -->
	<?php

		include 'includes/sidebar.php';

	?>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Users</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a>
			</div>
			<?php if (!empty($alert_msg)) {?>
        <div class="alert alert-success"><?php echo $alert_msg; ?></div>
<?php }?>
			


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Create Products</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					  <form method="POST" name="insertproduct" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="first_name" class="col-sm-3 col-form-label">Product Name</label>
                <div class="col-sm-7">
                <input type="text" name="pname" class="form-control" id="pname" placeholder="Product Name">
                </div>
            </div>
          
            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Price</label>
                <div class="col-sm-7">
                <input type="number"  name="price" class="form-control" id="price" placeholder="price">
                </div>
            </div>


            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Category</label>
                <div class="col-sm-7">
                	      <select name="category">

            <?php while($row1 = mysqli_fetch_array($result1)):;?>

            <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>

            <?php endwhile;?>

        </select>
                </div>
            </div>






            <div class="form-group row">
                <label for="pro_img" class="col-sm-3 col-form-label">Product Image</label>
                <div class="col-sm-7">

                <input type="file" name="image" id="image" value="" required>

                </div>
            </div>


          

            <div class="form-group row">
                <label for="description" class="col-sm-3 col-form-label">Product Description</label>
                <div class="col-sm-7">
                <textarea cols="100" rows="5" name="description"></textarea>
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
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>