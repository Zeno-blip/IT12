<?php include_once 'header.php'; 

require 'function.php';

if(!isset($_SESSION["user_id"])){
	header("Location: index.php");
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
				

				<?php
					
				?> 

				<!--MAIN CONTENT HERE!!!!!!!!-->
				<div class="container">

					<br /><br />

					<div class="row" style="margin: 0 20px;">
						<div class="col-md-12">
							<h2> Manage Users</h2>
							<div class="button-container pull-right">
								<a href="users-add.php" class="btn btn-success"> Add New User</a>
							</div>
						</div>
					</div>

					<div class="row" style="margin: 0 20px;">
						<div class="col-md-3">
							<label>Role:</label>
							<select id="role-filter" class="form-select">
								<option value="">All</option>
								<option value="admin">Admin</option>
								<option value="cashier">Cashier</option>
								<option value="accountant">Accountant</option>
							</select>
						</div> 
					</div>

					<br />

					<div class="row" style="margin: 0 20px;">
						<div class="col-md-12">
							<div class="table-responsive">
								<table id="example" class="table display nowrap" style="width:100%">
									<thead class="thead-dark">
										<tr>
											<th scope="col">Role</th>
											<th scope="col">First Name</th>
											<th scope="col">Last Name</th>
											<th scope="col">Sex</th>
											<th scope="col">Birthdate</th>
											<th scope="col">Phone Number</th>
											<th scope="col">Address</th>
											<th scope="col">Barangay</th>
											<th scope="col">City</th>
											<th scope="col">Username</th>
											<th scope="col">Email Address</th>
											<th scope="col" class="no-print">Actions</th>
										</tr>
									</thead> 
									<tbody>  
										<?php 

												?>

											<tr>
												<td><strong></strong></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td>
													<a href="users-edit.php?id=" class="btn btn-primary btn-sm"> Edit </a>
													<a href="users-manage.php?delid=" onclick="return confirm('Do you really want to delete this record?');" class="btn btn-danger btn-sm"> Delete </a>
												</td>
											</tr>

										<?php
											
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				
				<script>
					$(document).ready(function() {
						$('#example').DataTable( {
							dom: 'Bfrtip',
							buttons: [
								{
									extend: 'copy',
									exportOptions: {
										columns: ':visible:not(.no-print)'
									}
								},
								{
									extend: 'csv',
									exportOptions: {
										columns: ':visible:not(.no-print)'
									}
								},
								{
									extend: 'excel',
									exportOptions: {
										columns: ':visible:not(.no-print)'
									}
								},
								{
									extend: 'pdf',
									exportOptions: {
										columns: ':visible:not(.no-print)'
									}
								},
								{
									extend: 'print',
									customize: function ( win ) {
										$(win.document.body)
											.find('.no-print')
											.remove();
									}
								}
							],
							columnDefs: [
								{
									targets: [11], // replace 2 with the index of the column you want to exclude
									visible: true,
									className: 'no-print'
								}
							]
						} );
					});

					$(document).ready(function() {
						var table = $('#example').DataTable();

						// Add a custom filter function
						$.fn.dataTable.ext.search.push(
							function(settings, data, dataIndex) {
							var role = $('#role-filter').val();
							var roleData = data[0];

							// If the date column is empty, don't show the row
							if (roleData === "") {
								return false;
							}

							
							if (role === "" || role === roleData) {
								return true;
							}

							return false;
							}
						);

						// Trigger the filtering when the user changes the date range
						$('#role-filter').change(function() {
							table.draw();
						});
					});
				</script>
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