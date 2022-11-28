
<?php
        session_start();
        include 'conn.php';
        if (!isset($_SESSION['aid'])) {
          header("Location:login.php");
          exit();
        }
        

if(isset($_POST['submit']))
  {
    $id=$_GET['id'];
    //Getting Post Values
    $pname=$_POST['pname'];




 
	
 
	
		// Image db insert sql
		//Query for data updation
     	$query=mysqli_query($conn, "UPDATE `category` SET category_name ='$pname' where cat_id = '$id'");
		
		if ($query) {
		    echo "<script>alert('You have successfully update the data');</script>";
		    echo "<script type='text/javascript'> document.location ='manage-category.php'; </script>";
	  	}

	  else
	    {
	      echo "<script>alert('Something Went Wrong. Please try again');</script>";
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
					<div class="container">

    <div class="info"></div>
   
     <?php
     include "conn.php";
      $id=$_GET['id'];
      $ret=mysqli_query($conn,"select * from category where cat_id='$id'");
      while ($row=mysqli_fetch_array($ret)) {
      ?>

         <form method="POST" >
          
            <div class="form-group row">
                

                <label for="first_name" class="col-sm-3 col-form-label">Product Name</label>
                <div class="col-sm-7">
                <input type="text" name="pname" class="form-control" id="pname" placeholder="Product Name" value="<?php echo $row['category_name']; ?>">
                </div>
            </div>


            

          
         

             
        
                


           
            <div class="form-group row">
                <div class="col-sm-7">
                 <input type="hidden" name="id" value="<?php echo $row[$id]; ?>">
                 
                
                
                <input type="submit" name="submit" class="btn btn-success" value="SUBMIT" />
       
          
                </div>
            </div>
        </form>
        <?php }?>
    </div>
				</div>
				
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>