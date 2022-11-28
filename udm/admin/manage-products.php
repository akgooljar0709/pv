
<?php
        session_start();
        include 'conn.php';
        if (!isset($_SESSION['aid'])) {
          header("Location:login.php");
          exit();
        }
        

$query = "SELECT * FROM `product`";

$results = mysqli_query($conn, $query);
$records = mysqli_num_rows($results);
$msg = "";
if (!empty($_GET['msg'])) {
    $msg = $_GET['msg'];
    $alert_msg = ($msg == "add") ? "New Record has been added successfully!" : (($msg == "del") ? "Record has been deleted successfully!" : "Record has been updated successfully!");
} else {
    $alert_msg = "";
}

 if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `product` WHERE CONCAT(`id`, `product_name`,'product_code') LIKE '%".$valueToSearch."%' ";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `product`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $conn = mysqli_connect("localhost", "root", "root", "ecom");
    $filter_Result = mysqli_query($conn, $query);
    return $filter_Result;
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

	input[type=search], select {
	  width: 50%;
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
	button[type=submit] {
	  width: 10%;
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

			


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Manage Users</h3>
						<a href="add-users.php" class="btn-download">
							
							<span class="text">Add New Products</span>
						</a>
					</div>
					<?php if (!empty($alert_msg)) {?>
        <div class="alert alert-success"><?php echo $alert_msg; ?></div>
<?php }?>
					 <form action="manage-products.php" method="post">
            <div class="row">
              <div class="col-sm-6">

              	<div class="form-input">

					<input type="search" name="valueToSearch" placeholder="Search...">
					<button type="submit" name="search"  class="search-btn"><i class='bx bx-search' ></i></button>

				</div>
                
              </div>
              
              

            </div>
            <br>
            

        <table>
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                
                <th scope="col">Action</th>

                 <th scope="col">Email</th>
                </tr> 
            </thead>
            <tbody>
                <?php
                  if (!empty($records)) {

                      while ($row = mysqli_fetch_array($search_result)) {
                          ?>
                                <tr>
                                    <th scope="row"><?php echo $row['id']; ?></th>
                                    <td><?php echo $row['product_name'] ; ?></td>
                
                                    
                                    <td><?php echo $row['price']; ?></td>
                                    <td>
                                        <a href="update-products.php?id=<?php echo $row['id']?>" class="btn btn-primary">EDIT</a>
                                        <a href="delete_product.php?pid=<?php echo $row['id']; ?>" class="btn btn-danger" onClick="javascript:return confirm('Do you really want to delete?');" >DELETE</a>
                                        
                                    </td>
                                    <td><input type="checkbox" class="email" name="email" value="<?php echo $row['email'] ?>"></td>
                                </tr>

                                                          <?php
                              }
                              }
                              ?>



            </tbody>
        </table>
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