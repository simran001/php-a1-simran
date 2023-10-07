<?php
    
	//including database connection file
	require_once ('database.php');
	$res = $database->read();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Order Page | Assignment 1</title>
	<meta name="description" content="Assignment 1 ">
	<meta name="robots" content="noindex, nofollow">
	
	<!-- Linking stylesheet to html -->
    <link rel="stylesheet" href="./css/style.css">
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Roboto:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

</head>
<body>
	<!-- Header section -->
<header>
    <section class="header">
    <div>
        <h1>TAj PIZZA</h1>
    </div>
    <div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Menu</a></li>
                <li><a href="view.php">View</a></li> <!--LInking view page to index page-->
            </ul>
        </nav>
    </div>
     </section>

</header>
<!--main container  -->
<div class="container1">
	<div class="row">
		<!-- table to display data retrieved from database -->
		<table class="table">
			<tr>
				<th>Order no.</th>
				<th>Full Name</th>
				<th>Pizza type</th>
				<th>Pizza size</th>
				<th>Extra toppings</th>
				<th>Email</th>
				<th>Phone Number</th>
				<th>Address</th>
			</tr>
			<?php
			//retrieving all the data using while loop
           while($r = mysqli_fetch_assoc($res)){
			?>
			<tr>
				<td> <?php echo $r['id']; ?></td>
				<td> <?php echo $r['fname'] . " " . $r['lname']; ?></td>
				<td> <?php echo $r['Pizza_type']; ?></td>
				<td> <?php echo $r['Pizza_size']; ?></td>
				<td> <?php echo $r['toppings']; ?></td>
				<td> <?php echo $r['email']; ?></td>
				<td> <?php echo $r['contact']; ?></td>
				<td> <?php echo $r['Delivery_address']; ?></td>
				
			</tr>
			<?php
		   }

			?>
		</table>
	</div>
</div>
<footer>
    <h3>TAj PIZZA</h3>
    <p>&copy; 2023 TAj PIZZA</p>
</footer>
</body>
</html>
