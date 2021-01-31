<?php
	include_once("require/connection.php");
	include_once("require/header.php");

	// if (!empty($_POST['search'])) {
	// 	$search = $_POST['search'];
	// 	$result = mysqli_query($con,"SELECT * FROM employee WHERE  CONCAT(emp_name, emp_lastname, emp_fname, emp_job) LIKE '%search%'");
	// }
	// }else{
	// 	$result = mysqli_query($con,"SELECT * FROM employee");
	if (!empty($_POST["search"])) {
		$search = $_POST["search"];
		$result = mysqli_query($con,"SELECT * FROM employee WHERE emp_name LIKE '%search%' OR emp_lastname LIKE '%search%' OR emp_job LIKE '%search%' ");
	}else{
		$result = mysqli_query($con,"SELECT * FROM employee");
	}
	
?>
		<!-- Second row -->
	<div class="row">
		<div class="col-md-2">
			<h4 class="itm-name">List Of Employee</h4>
		</div>
		<div class="col-md-4">
			<ul class="nav nav-pills">
				<li role="presentation" class="active"><a href="add_item.php">New Item</a></li>
				<li role="presentation"><a href="add_emp.php">New Employee</a></li>
				<li role="presentation"><a href="home.php">List of items</a></li>
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
						<th>Employee Name</th>
						<th>Father Name</th>
						<th>Last Name</th>
						<th>Occupation</th>
						<th>Operation</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$result =mysqli_query($con, "SELECT employee_id ,emp_name, emp_fname, emp_lastname, emp_job FROM employee");
				
							if (mysqli_num_rows($result) > 0) {
								while ($row = mysqli_fetch_row($result)) {
									echo "<tr>";
										echo "<td>" . $row[1] . "</td>";
										echo "<td>" . $row[2] . "</td>";
										echo "<td>" . $row[3] . "</td>";
										echo "<td>" . $row[4] . "</td>";
										echo "<td><a href='edit_emp.php?id=" .$row[0]."'>Edit</a></td>";
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