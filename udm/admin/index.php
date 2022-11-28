
<?php
        session_start();
        include 'conn.php';
        if (!isset($_SESSION['aid'])) {
          header("Location:login.php");
          exit();
        }
        $ID= $_SESSION["aid"];
        $sql=mysqli_query($conn,"SELECT * FROM admin where aid='$ID' ");
        $row  = mysqli_fetch_array($sql);

        


        
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
		<?php

			include "includes/top_nav.php";
		?>
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
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>

			</div>
			<?php 
			include 'conn.php';

			$query1=mysqli_query($conn,"Select * from orders where orderDate = now()");
$totalord=mysqli_num_rows($query1);
?>
			<ul class="box-info">

				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3><?php echo "$totalord";?></h3>
						<p>New Order</p>
					</span>
				</li>
				<?php 
			include 'conn.php';

			$query2=mysqli_query($conn,"Select * from users ");
$totalcust=mysqli_num_rows($query2);
?>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3><?php echo "$totalcust";?></h3>
						<p>Customers</p>
					</span>
				</li>
				<?php 
			include 'conn.php';

			$query3=mysqli_query($conn,"Select * from users ");
$totalmess=mysqli_num_rows($query3);
?>

				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3><?php echo "$totalmess";?></h3>
						<p>Total Message</p>
					</span>
				</li>
			</ul>


			
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>