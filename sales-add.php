<?php include_once 'header.php'; ?>

			<!--MENU SIDEBAR CONTENT-->
			<nav id="sidebar">
				<div class="sidebar-header">
					<img src="../../assets/images/logo.png" class="img-fluid"/>
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
						
					<li class="dropdown active">
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
 
					<li class="dropdown">
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

                <!--MAIN CONTENT HERE!!!!!!!!-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <br /><br />
                            <h2 style="margin: 0 20px;">Add New Sale</h2>
                        </div>
                    </div>
                    
                    <!-- Display the table for adding new sales -->
					<form method="POST" action="sales-create-sales.php" style="margin: 0 20px;">

                        <br />

                        <div class="row">
                            <div class="col-md-4">
                            </div>

                            <?php 
                                

                            ?>
                            
                            <div class="col-md-2">
                                <input type="text" name="user" readonly hidden value="<?php echo $user_id; ?>" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <input type="text" name="branch" readonly hidden value="<?php echo $branch_id; ?>" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label>Date: </label>
                                <input type="text" name="date" readonly value="<?php echo date("Y-m-d"); ?>" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-4">
                                <select name="status" class="form-select" hidden>
                                    <option selected hidden value="">Select Here... </option>
                                    <?php 
                                       
                                    ?>
                                </select>
                            </div>
                        </div><br />

                        <table class="table" id="product-table">
                            <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Discount (%)</th>
                                    <th>Subtotal</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <select id="category" name="category[]" class="form-select category" required>
                                            <option selected hidden value="">Select Category Here...</option>
                                            <?php 

                                            ?>
                                        </select>
                                    </td>
                                    <td>
                                        <select id="name" name="name[]" class="form-select name" required onchange="fetchProductPrice(this)">

                                        </select>
                                    </td>
                                    <td><input type="number" name="quantity[]" class="form-control quantity" min="1" required></td>
                                    <td><input type="number" name="price[]" class="form-control price" readonly></td>
                                    <td><input type="number" name="discount[]" class="form-control discount" value="0" step="1" min="0" max="100"></td>
                                    <td><input type="number" name="subtotal[]" class="form-control subtotal" readonly></td>
                                    <td><button type="button" class="btn btn-danger delete-product"><i class="fa fa-trash"></i></button></td>
                                </tr>
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="4" class="text-right"></td>
                                    <td class="text-right">Total:</td>
                                    <td><input type="number" id="total" name="total" class="form-control" readonly></td>
                                    <td></td>
                                </tr>
                            </tfoot>
                        </table>
                        <div class="buttons pull-right">
                            <button type="button" id="add-product" class="btn btn-primary"><i class="fa fa-plus"></i> Add Product</button>
                            <button type="submit" name="create_sales" class="btn btn-success"><i class="fa fa-save"></i> Create Sales</button>
                        </div>
                    </form>
                </div>
                <script>
                    function fetchProductPrice(selectElement) {
                        var productId = selectElement.value;
                        var priceInput = selectElement.parentNode.parentNode.querySelector(".price");

                        // Send an AJAX request to fetch the product price based on the selected product ID
                        var xhr = new XMLHttpRequest();
                        xhr.onreadystatechange = function() {
                            if (xhr.readyState == 4 && xhr.status == 200) {
                                // Update the price input with the fetched product price
                                priceInput.value = xhr.responseText;
                            }
                        };
                        xhr.open("POST", "sales-get-price.php", true);
                        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                        xhr.send("product_id=" + productId);
                    }

                    // Calculate subtotal for row
					$('#product-table').on('input', '.quantity, .discount', function() {
						var row = $(this).closest('tr');
						calculateSubtotal(row);
						calculateTotals();
					});

                    // Calculate totals for all products
					function calculateTotals() {
						var subtotal = 0;
						$('.subtotal').each(function() {
							subtotal += parseFloat($(this).val());
						});
						$('#subtotal').val(subtotal.toFixed(2));

						var total = subtotal;
						$('#total').val(total.toFixed(2));
					}

                    // Calculate subtotal for all the info in table
					function calculateSubtotal(row) {
						var quantity = row.find('.quantity').val();
						var price = row.find('.price').val();
						var discount = row.find('.discount').val();
						var subtotal = quantity * price * (1 - discount / 100);
						row.find('.subtotal').val(subtotal.toFixed(2));
					}

                    // Add product row
					$('#add-product').click(function() {
                        $.ajax({
                            url: 'sales-add-rows.php', // Replace with the URL of your PHP file
                            method: 'GET', // Use the appropriate HTTP method (GET/POST) as needed
                            success: function(responseHTML) {
                                // Append the response HTML to the product table tbody
                                $('#product-table tbody').append(responseHTML);
                            },
                            error: function(xhr, textStatus, errorThrown) {
                                // Handle any error that occurs during the AJAX request
                                console.error('Error: ' + textStatus + ' ' + errorThrown);
                            }
                        });
                    });

                    // Delete product row
					$('#product-table').on('click', '.delete-product', function() {
						$(this).closest('tr').remove();
						calculateTotals();
					});

                    $(document).ready(function() {
                        // When category select tag changes
                        $(document).on("change", ".category", function() {
                            // Get selected category_id
                            var category_id = $(this).val();
                            
                            // Find the closest row
                            var row = $(this).closest("tr");
                            
                            // Find the name select element within the current row
                            var nameSelect = row.find(".name");
                            
                            // Send AJAX request to fetch products with the selected category_id
                            $.ajax({
                                url: "sales-get-products.php", // Replace with your PHP file that fetches products from database
                                type: "POST",
                                data: {category_id: category_id},
                                success: function(data) {
                                    // Replace options of the name select tag with fetched products for the current row only
                                    nameSelect.html(data);
                                }
                            });
                        });
                    });
                </script>


<?php include_once 'footer.php'; ?>