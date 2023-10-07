<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Order Page | Assignment 1</title>
	<meta name="description" content="Assignment 1">
	<meta name="robots" content="noindex, nofollow">

	<!--linking stylesheet to html-->
    <link rel="stylesheet" href="./css/style.css">

	<!--Adding google fonts-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Roboto:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

</head>
<body>
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
                <li><a href="view.php">View</a></li>
            </ul>
        </nav>
    </div>
        </section>

    </header>
	<section class="hero">
		<div>
			<h1>Enjoy the greatness of PIZZA!!</h1>
		</div>
	</section>
  <main class="container">
	   <section class="form-row row justify-content-center">
		<!-- Creating form for getting user input -->
		     <form method="post" class="form-horizontal col-md-6 col-md-offset-3">
					<h2>Pizza Ordering Form</h2>
					<div class="form-group">
					     <label for="fname">First Name:</label>
            			<input type="text" id="fame" name="fname" placeholder="Enter your first name" required>
            		</div>
        
            		<div class="form-group">
                		<label for="lname">Last Name:</label>
                		<input type="text" id="lname" name="lname" placeholder="Enter your last name" required>
            		</div>
        
            		<div class="form-group">
                		<label for="email">Email:</label>
                		<input type="email" id="email" name="email" placeholder="xyz@abc.com" required>
            		</div>

            		<div class="form-group">
                		<label for="contact">Contact Number:</label>
                		<input type="tel" id="contact" name="contact" placeholder="000-000-000" required>
            		</div>

            		<div class="form-group">
                		<label for="Pizza_type">Pizza type</label>
                		<select id="Pizza_type" name="Pizza_type">
                    		<option value="Vegetarian">Vegetarian</option>
                    		<option value="Non-Vegetarian">Non-vegetarian</option>
                		</select>
            		</div>
            		<div class="form-group">
                		<label for="Pizza_size">Pizza Size</label>
                		<select id="Pizza_size" name="Pizza_size">
                    		<option value="Small">Small</option>
                    		<option value="Medium">Medium</option>
                    		<option value="Large">Large</option>
                		</select>
            		</div>
        
            <div class="form-group">
                <label for="toppings">Select Extra Toppings:</label>
                <div class="custom-select">
                        <label><input type="radio" name="toppings" value="Pepperoni">Pepperoni</label>
                        <label><input type="radio" name="toppings" value="Mushrooms">Mushrooms</label>
                        <label><input type="radio" name="toppings" value="Onions">Onions</label>
                        <label><input type="radio" name="toppings" value="Sausage">Sausage</label>
                </div>
            </div>
            
            <div class="form-group">
                <label for="Deliver_address">Delivery Address:</label>
                <input type="text" id="Delivery_address" name="Delivery_address" placeholder="Enter your address" required>
            </div>
					 
			<div class="submit-button">
        		<button type="submit">Submit</button>
   			</div>
		</form>

         <div class="submit-message">
           <?php	 	

		   		//// Include the database.php file
				 require_once ('database.php');

				// Checking if the form has been submitted and processing the data

				 if(isset($_POST) & !empty($_POST)){
				  $fname = $database->sanitize($_POST['fname']);
				  $lname = $database->sanitize($_POST['lname']);
				  $Pizza_type = $database->sanitize($_POST['Pizza_type']);
				  $Pizza_size = $database->sanitize($_POST['Pizza_size']);	
				  $toppings = $database->sanitize($_POST['toppings']);	
				  $email = $database->sanitize($_POST['email']);
				  $contact= $database->sanitize($_POST['contact']);	
				  $Delivery_address = $database->sanitize($_POST['Delivery_address']);
				  $res = $database->create($fname,$lname,$Pizza_type,$Pizza_size,$toppings,$email,$contact,$Delivery_address);

				  //Checking if the record has been added else gives error
				if ($res){
					  echo "<p>Record Added Successfully</p>";
				 }
				 else{
				  echo "<p>could not create record.</p>";
				  }
				 }
			 ?>
        </div>
      </section>
     </main>
	 <footer>
         	<h3>TAj PIZZA</h3>
        	<p>&copy; 2023 TAj PIZZA</p>
    </footer>
   </body>
</html>
