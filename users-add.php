

<?php
// Include the database connection settings
include_once 'header.php';
include_once 'includes/config.php';

require 'function.php';

if(!isset($_SESSION["user_id"])){
	header("Location: index.php");
}

// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Get the form data
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $sex = $_POST['sex'];
    $birthdate = $_POST['birthdate'];
    $phone_number = $_POST['phone_number'];
    $street_address = $_POST['street_address'];
    $barangay = $_POST['barangay'];
    $city = $_POST['city'];
    $province = $_POST['province'];
    $country = $_POST['country'];
    $zipcode = $_POST['zipcode'];
    $role = $_POST['role'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash the password

    // Check if the username already exists
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "Username already exists!";
    } else {
        // Insert the data into the database
        $query = "INSERT INTO users (first_name, middle_name, last_name, sex, birthdate, phone_number, street_address, barangay, city, province, country, zipcode, role, username, email, password) VALUES ('$first_name', '$middle_name', '$last_name', '$sex', '$birthdate', '$phone_number', '$street_address', '$barangay', '$city', '$province', '$country', '$zipcode', '$role', '$username', '$email', '$password')";
        mysqli_query($conn, $query);

        echo "User added successfully!";
    }
}
?>

			<!--MENU SIDEBAR CONTENT-->
			<nav id="sidebar">
				<div class="sidebar-header">
					<h1>User ID: <?php echo $_SESSION["user_id"];?></h1>
					<?php 
						
						
					?>

					<div class="ml-auto" id="userInfo">
						<p class="text-right"></p>
						<p class="text-right"></p>
					</div>
				</div>
				<ul class="list-unstyled components">
					<li class="">
						<a href="index.php" class="dashboard"><i class="material-icons">dashboard</i><span>Dashboard</span></a>
					</li>
						
					<li class="dropdown">
						<a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
						<i class="material-icons">point_of_sale</i><span>Sales</span></a>
						<ul class="collapse list-unstyled menu" id="homeSubmenu1">
							<li>
								<a href="sales-add.php">Add New Sale</a>
							</li>
							<li>
								<a href="sales-manage.php">Manage Sales</a>
							</li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
						<i class="material-icons">inventory</i><span>Products</span></a>
						<ul class="collapse list-unstyled menu" id="pageSubmenu2">
							<li>
								<a href="products-add.php">Add New Product</a>
							</li>
							<li>
								<a href="products-manage.php">Manage Products</a>
							</li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
						<i class="material-icons">group</i><span>Categories</span></a>
						<ul class="collapse list-unstyled menu" id="pageSubmenu3">
							<li>
								<a href="categories-add.php">Add New Category</a>
							</li>
							<li>
								<a href="categories-manage.php">Manage Categories</a>
							</li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#pageSubmenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
						<i class="material-icons">payments</i><span>Expenses</span></a>
						<ul class="collapse list-unstyled menu" id="pageSubmenu5">
							<li>
								<a href="expenses-add.php">Add New Expenses</a>
							</li>
							<li>
								<a href="expenses-manage.php">Manage Expenses</a>
							</li>
						</ul>
					</li>
					<li class="">
						<a href="charts.php" class="dashboard"><i class="material-icons">equalizer</i><span>Charts</span></a>
					</li>
 
					<li class="dropdown active">
						<a href="#pageSubmenu7" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
						<i class="material-icons">account_circle</i><span>Manage Users</span></a>
						<ul class="collapse list-unstyled menu" id="pageSubmenu7">
							<li>
								<a href="users-add.php">Add New User</a>
							</li>
							<li>
								<a href="users-manage.php">Manage Users</a>
							</li>
						</ul>
					</li>
					<li class="logout">
						<a href="logout.php"><i class="material-icons">logout</i><span>Logout</span></a>
					</li>
				</ul>
			</nav>
			<div id="content">

				<!--TOP NAVBAR CONTENT-->
				<div class="top-navbar">
					<nav class="navbar  navbar-expand-lg">
						
						
						<a class="navbar-brand" href="#">Dashboard</a>
						<button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse"
						data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle">
							<span class="material-icons">menu</span>
						</button>
						
					</nav>
				</div>	  
				

				<!-- PHP to ADD NEW USER -->
				<?php 

					
				
				?>

				<!--MAIN CONTENT HERE!!!!!!!!-->
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<br /><br />
							<h2 style="margin: 0 20px;">Add New User</h2>
						</div>
					</div>

					<!-- FORM FOR ADDING USERS --> 
					<form method="POST" style="margin: 0 20px;">

						<br /><br />
						<h4>Personal Information: </h4>

						<div class="row">
							<div class="col-md-4">
								<label>First Name:</label>
								<input type="text" name="first_name" class="form-control" required>
							</div>
							<div class="col-md-4">
								<label>Middle Name:</label>
								<input type="text" name="middle_name" class="form-control" required>
							</div>
							<div class="col-md-4">
								<label>Last Name:</label>
								<input type="text" name="last_name" class="form-control" required>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<label>Sex:</label>
								<select class="form-select" name="sex" id="sex" required>
									<option selected hidden value="">Select Here...</option>
									<option value="male">Male</option>
									<option value="female">Female</option>
								</select>
							</div>
							<div class="col-md-4">
								<label>Birthdate:</label>
								<input type="date" class="form-control" id="birthdate" name="birthdate" required>
							</div>
							<div class="col-md-4">
								<label>Phone Number:</label>
								<input type="text" class="form-control" id="phone_number" name="phone_number" maxlength="11" placeholder="e.g. 09123456789" required>
							</div>
						</div>

						<br />
						<h4>Address: </h4>

						<div class="row">
							<div class="col-md-4">
								<label>Street Address:</label>
								<input type="text" name="street_address" class="form-control" required>
							</div>
							<div class="col-md-4">
								<label>Barangay:</label>
								<input type="text" name="barangay" class="form-control" required>
							</div>
							<div class="col-md-4">
								<label>City:</label>
								<input type="text" name="city" class="form-control" required>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<label>Province:</label>
								<input type="text" name="province" class="form-control" required>
							</div>
							<div class="col-md-4">
								<label>Country:</label>
								<input type="text" name="country" class="form-control" required>
							</div>
							<div class="col-md-4">
								<label>Postal Code:</label>
								<input type="text" name="zipcode" class="form-control" required>
							</div>
						</div>

						<br />
						<h4>Account Information: </h4>
						<div class="row">
							<div class="col-md-6">
								<label>Role:</label>
								<select class="form-select" name="role" id="role" required>
									<option selected hidden value="">Select Here </option>
									<option value="admin">Administrator</option>
									<option value="admin">Accountant</option>
									<option value="cashier">Cashier</option> 
								</select>
								
							</div>
							<div class="col-md-6">
								<label>Username:</label>
								<div class="input-group mb-2">
								<div class="input-group-prepend">
									<div class="input-group-text">@</div>
								</div>
								<input type="text" name="username" class="form-control" id="inlineFormInputGroup" placeholder="Username">
							</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label>Email Address:</label>
								<input type="text" name="email" class="form-control" required>
							</div>
							<div class="col-md-6">
								<label>Password:</label>
								<input type="password" name="password" class="form-control" required>
							</div>
						</div><br />

						<!-- BUTTONS FOR ADDING USERS --> 
						<div class="row" style="margin-top: 1%;">
							<div class="col-md-12 d-flex justify-content-end">
								<button type="text" name="submit" class="btn btn-primary">Submit</button>&nbsp; &nbsp;
								<a href="users-manage.php" class="btn btn-danger">Cancel</a>
							</div>
						</div><br />
 
					</form>
				</div>


<!--FOOTER CONTENT-->

</div>
		</div>
    
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="assets/js/jquery-3.3.1.slim.min.js"></script>
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/jquery-3.3.1.min.js"></script>

		<!-- LINKS NEEDED FOR THE REPORTS.PHP -->
		<script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>



		<script type="text/javascript">
				
				$(document).ready(function(){
					$("#sidebar-collapse").on('click',function(){
						$('#sidebar').toggleClass('active');
						$('#content').toggleClass('active');
					});
					
					$(".more-button,.body-overlay").on('click',function(){
						$('#sidebar,.body-overlay').toggleClass('show-nav');
					});
				});	

                document.getElementById("sidebar-collapse").addEventListener("click", function() {
					var icon = this.querySelector("span");
					if (this.classList.contains("back")) {
						this.classList.remove("back");
						this.classList.add("forward");
					} else {
						this.classList.remove("forward");
						this.classList.add("back");
					}
				});

				document.addEventListener('DOMContentLoaded', function() {
					// get all dropdown links
					var dropdownLinks = document.querySelectorAll('.dropdown-toggle');

					// add click event listener to all dropdown links
					dropdownLinks.forEach(function(link) {
						link.addEventListener('click', function() {
						// check if this link is inside an open dropdown
						var dropdowns = document.querySelectorAll('.dropdown.show');
						dropdowns.forEach(function(dropdown) {
							if (dropdown.contains(link)) {
							// close the dropdown
							dropdown.classList.remove('show');
							}
						});
						});
					});
				});

				$(document).ready(function() {
					// Set initial state for user info visibility
					var isUserInfoVisible = true;
					
					// Listen for click event on sidebar-collapse button
					$('#sidebar-collapse').on('click', function() {
						// Toggle user info visibility
						if (isUserInfoVisible) {
							$('#userInfo').hide();
						} else {
							$('#userInfo').show();
						}
						
						// Update the state of user info visibility
						isUserInfoVisible = !isUserInfoVisible;
					});
				});
		</script>

  
</html>	 		