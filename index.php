<?php include 'header.php'; ?>
<link rel="stylesheet" href="style.css">

<body>
	<div class="wrapper">
		<div class="body-overlay"></div>
				<!-----SIDEBAR CONTENT-->
			<nav id="sidebar">
					<div class="sidebar-header>
					<div class="ml-auto" id="userInfo">
			
						<p class="text-right">Admin Staff || admin</p>
						<p class="text-right">Main Branch</p>
					</div>
				<ul class="list-unstyled components">
					<li class="active">
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
						<a href="#" class="dashboard"><i class="material-icons">equalizer</i><span>Charts</span></a>
					</li>
 
					<li class="dropdown">
						<a href="#pageSubmenu7" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
						<i class="material-icons">account_circle</i><span>Manage Users</span></a>
						<ul class="collapse list-unstyled menu" id="pageSubmenu7">
							<li>
								<a href="#">Add New User</a>
							</li>
							<li>
								<a href="#">Manage Users</a>
							</li>
						</ul>
					</li>
					<li class="logout">
						<a href="?logout='1'"><i class="material-icons">logout</i><span>Logout</span></a>
					</li>
				</ul>
			</nav>
			<div id="content">

				<!--TOP NAVBAR CONTENT-->
				<div class="top-navbar">
					<nav class="navbar  navbar-expand-lg">
						<button type="button" id="sidebar-collapse" class="back">
						<span class="material-icons"></span>
						</button>
						
						<a class="navbar-brand" href="#">Dashboard</a>
						<button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse"
						data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle">
							<span class="material-icons">menu</span>
						</button>
						
					</nav>
				</div>	  
				
				<!--DASHBOARD CONTENT-->
				<div class="main-content">

					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header">
									<div class="icon icon-warning">
										<span class="material-icons">equalizer</span>
									</div>
								</div>

								

								<div class="card-content">
									<p class="category"><strong>No. of Products</strong></p>
									<h4 class="card-title"></h4>
								</div>


								<div class="card-footer">
									<div class="stats">
										<i class="material-icons text-info">info</i>
										<a href="products-manage.php">See detailed report</a>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header">
									<div class="icon icon-rose">
										<span class="material-icons">shopping_cart</span>
									</div>
								</div>


								

								<div class="card-content">
									<p class="category"><strong>Sales</strong></p>
									<h4 class="card-title">₱</h4>
								
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">local_offer</i>
										product-wise sales
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header">
									<div class="icon icon-success">
										<span class="material-icons">attach_money</span>
									</div>
								</div>

								

								<div class="card-content">
									<p class="category"><strong>Expenses </strong></p>
									<h4 class="card-title">₱</h4>
								</div>

								

								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">date_range</i> Total Sales Amount
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header">
									<div class="icon icon-info">
										<span class="material-icons">follow_the_signs</span>
									</div>
								</div>

								
								<div class="card-content">
									<p class="category"><strong>No. of Users</strong></p>
									<h3 class="card-title">+</h3>
								</div>

								
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">update</i>
										just Updated
									</div>
								</div>
							</div>
						</div>
					</div>

					<!--SECOND ROW OF DASHBOARD CONTENT-->
					
					<div class="row">
						<div class="col-lg-7 col-md-18">
							<div class="card" style="min-height:485px">
								<div class="card-header card-header-text">
									<h4 class="card-title">Total Sales</h4>
								</div>

								<div class="filter pull-right" style="margin: 20px;">
									<label for="filter">Filter by:</label>
									<select id="filter" class="form-select">
										<option value="weekly">Weekly</option>
										<option value="monthly">Monthly</option>
										<option value="quarterly">Quarterly</option>
										<option value="yearly">Yearly</option>
									</select>
								</div>

								<div style="margin: 20px;">
        							<canvas id="sales-chart"></canvas>
    							</div>

							</div>
						</div>
						<div class="col-lg-5 col-md-18">
							<div class="card" style="min-height:485px">
								<div class="card-header card-header-text">
									<h4 class="card-title">Trending Products</h4>
								</div>

								<div class="filter pull-right" style="margin: 20px;">
									<select id="branch_filter" class="form-select" hidden>
										<option selected value="all">All branches</option>
										
									</select>
								</div>
								<br/><br/>

								<div class="table-responsive">
									<table class="table table-striped table-bordered" id="products_table">
										<thead>
											<tr>
												<th>#</th>
												<th>Name</th>
												<th>Sold</th>
											</tr>
										</thead>
										<tbody>
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>

                


				<script>
					var filter = 'weekly';

					var salesChart = new Chart($('#sales-chart'), {
						type: 'line',
						data: {
							labels: [],
							datasets: [{
								label: 'Total Sales',
								data: [],
								fill: false,
								borderColor: 'rgb(75, 192, 192)',
								pointBackgroundColor: 'rgb(75, 192, 192)',
								pointRadius: 3,
								pointHoverRadius: 7
							}]
						},
						options: {
							scales: {
								yAxes: [{
									ticks: {
										beginAtZero: true
									}
								}]
							}
						}
					});

					$('#filter').on('change', function() {
						filter = $(this).val();
						updateChart();
					});

					function updateChart() {
						$.ajax({
							url: 'get-data.php',
							type: 'POST',
							data: {filter: filter},
							dataType: 'json',
							success: function(data) {
								salesChart.data.labels = data.labels;
								if (filter === 'monthly') {
									salesChart.options.scales.xAxes = [{
										type: 'category',
										labels: data.labels
									}];
								} else {
									salesChart.options.scales.xAxes = [{
										type: 'time',
										time: {
											unit: 'day'
										}
									}];
								}
								salesChart.data.datasets[0].data = data.values;
								salesChart.update();
							}
						});
					}

					updateChart();

					//SCRIPT FOR THE HIGHEST SELLING PRODUCTS
					$(document).ready(function() {
						// Add event listener to branch filter
						$('#branch_filter').change(function() {
							// Get selected branch filter value
							var branch_filter = $(this).val();

							// Make AJAX request to get products data
							$.ajax({
								url: 'get-products.php',
								data: {
									'branch_filter': branch_filter
								},
								success: function(data) {
									// Replace table content with new data
									$('#products_table tbody').html(data);
								}
							});
						});

						// Load initial data
						$('#branch_filter').trigger('change');
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
	</body>
  
</html>	 		