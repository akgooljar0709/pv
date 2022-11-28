 <?php
        session_start();
        include 'conn.php';
        $ID= $_SESSION["aid"];
        $sql=mysqli_query($conn,"SELECT * FROM admin where aid='$ID' AND role = '$Role' ");
        $row  = mysqli_fetch_array($sql);


        
            ?>



<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Admin Panel</span>
			<br>
			
		</a>
		<ul class="side-menu top">
			

			<?php if($_SESSION['ROLE'] == 'superadmin'){ ?>
			<li >

				<a href="index.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="manage-users.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Users</span>
				</a>
			</li>


			<li>
				<a href="manage-customers.php">
					
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Customer</span>
				</a>
			</li>

			<li>
				<a href="manage-products.php">
					
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Products</span>
				</a>
			</li>

			<li>
				<a href="manage-category.php">
					
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Category</span>
				</a>
			</li>

			

			<li>
				<a href="manage-orders.php">
					
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Order Details</span>
				</a>
			</li>

			


			<li>
				<a href="contact-page.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Message</span>
				</a>
			</li>
			<?php } ?>

        	<?php if($_SESSION['ROLE'] == 'admin'){ ?>

			<li>
				<a href="#">
					<i class='bx bxs-group' ></i>
					<span class="text">Team</span>
				</a>
			</li>
			<?php } ?>
		</ul>


		<ul class="side-menu">
			
			<li>
				<a href="logout.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>

			
		</ul>
	</section>