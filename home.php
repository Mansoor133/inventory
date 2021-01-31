<?php
	require_once("require/header.php");
	include_once("require/connection.php");
	//for search 
	if (!empty($_POST['search'])) {
		$search = $_POST['search'];
		$result = mysqli_query($con,"SELECT item_id, item_name, item_price, item_date, emp_name FROM items AS i, employee AS e WHERE e.employee_id = i.employee_id AND CONCAT(item_name, item_price, item_date, emp_name) LIKE '%search%'");
	}
	else{
		$result = mysqli_query($con,"SELECT item_id, item_name, item_price, item_date, emp_name FROM items AS i, employee AS e WHERE e.employee_id = i.employee_id");
		}
?>
		<!-- Second row -->
		<div class="row">
			<div class="col-md-2">
				<h4 class="itm-name">Items Name</h4>
			</div>
			<div class="col-md-4">
				<ul class="nav nav-pills">
					<li role="presentation" class="active"><a href="add_item.php">New Item</a></li>
					<li role="presentation"><a href="add_emp.php">New Employee</a></li>
					<li role="presentation"><a href="emp_list.php">List of Employee's</a></li>
				</ul>
			</div>
			<div class="col-md-6" id="searchHere">
				<form class="form-inline" method="post" action="">
					<div class="form-group">
						<input type="text" class="form-control" name="search" placeholder="Search Here">
						<button type="submit" class="btn btn-primary" id="sr_btn">Search</button>
					</div>
				</form>
			</div>
		</div><br/>
		<!-- third row -->
		<div class="row" id="btm-row">
			<div class="col-md-12">
				<table class="table table-striped">
					<thead>
						<tr class="info">
							<th>Item Name</th>
							<th>Price</th>
							<th>Purchase Date</th>
							<th>Employee</th>
							<th>Operation</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$result =mysqli_query($con, "SELECT item_id,item_name, item_price, item_date, emp_name FROM items AS i, employee AS e WHERE e.employee_id = i.employee_id");
								if (mysqli_num_rows($result) > 0) {
									while ($row = mysqli_fetch_row($result)) {
										echo "<tr>";
											echo "<td>" . $row[1] . "</td>";
											echo "<td>" . $row[2] . "</td>";
											echo "<td>" . $row[3] . "</td>";
											echo "<td>" . $row[4] . "</td>";
											echo "<td><a href='edit_item.php?id=" .$row[0]."'>Edit</a></td>";
										echo "</tr>";
									}
								}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
<?php include_once("require/footer.php"); ?>