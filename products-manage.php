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
					<li class="dropdown active">
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
						
						<a class="navbar-brand" href="#">Manage Products</a>
						<button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse"
						data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle">
							<span class="material-icons">menu</span>
						</button>
						
					</nav>
				</div>
                
                <!-- PHP to Delete Products -->

                <?php
					
				?>

                <!--MAIN CONTENT HERE!!!!!!!!-->
				<div class="container">

                    <br /><br />

                    <div class="row" style="margin: 0 20px;">
                        <div class="col-md-12">
                            <h2> Manage Products</h2>
                            <a href="products-add.php" class="btn btn-success pull-right"> Add New Product</a>
                        </div>
                    </div>

                    <div class="row" style="margin: 0 20px;">
                        <div class="col-md-3">
                            <label>Category:</label>
                            <select id="category-filter" class="form-select">
                                <option value="">All</option>
                                <?php 
                                  
                                ?>
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
                                            <th scope="col">Name</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Price</th>
                                            <th scope="col" class="no-print">Actions</th>
                                        </tr>
                                    </thead> 
                                    <tbody>  
                                        <?php 

                                           
                                                ?>

                                            <tr>
                                                <td><strong><?php echo $row['name']; ?></strong></td>
                                                <td><?php echo $row['category_description']; ?></td>
                                                <td>₱<?php echo $row['price']; ?></td>
                                                <td>
                                                    <a href="products-edit.php?id=<?php echo htmlentities($row['product_id']); ?>" class="btn btn-primary btn-sm"> Edit </a>
                                                    <a href="products-manage.php?delid=<?php echo htmlentities($row['product_id']); ?>" onclick="return confirm('Do you really want to delete this record?');" class="btn btn-danger btn-sm"> Delete </a>
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
                                        targets: [3], // replace 2 with the index of the column you want to exclude
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
                                var category = $('#category-filter').val();
                                var categoryData = data[1];

                                // If the date column is empty, don't show the row
                                if (categoryData === "") {
                                    return false;
                                }

                                // Compare the branch with the user input date range
                                if (category === "" || category === categoryData) {
                                    return true;
                                }
                                return false;
                                }
                            );

                            // Trigger the filtering when the user changes the date range
                            $('#category-filter').change(function() {
                                table.draw();
                            });
                        });

                    </script>

<?php include_once 'footer.php'; ?>