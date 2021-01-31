<?php
	include_once("require/connection.php");
	include_once("require/header.php");
	$name =""; $price=""; $date=""; $employee="";
	//
	if (isset($_POST["submit"])) {
		if (!empty($_POST["name"])) {
				$name = $_POST["name"];
				$price = $_POST["price"];
				$date = $_POST["date"];
				$employee = $_POST["employee"];
			}			
			$result_i  = mysqli_query($con, "INSERT INTO items VALUES(NULL, '$name', $price, '$date', $employee)");
				if (!empty($name) && !empty($price) && !empty($date)) {	
					if ($result_i) {
						echo "Successfully added";
					}else{
						echo "Ooop! Something is goind wrong!";
				}
			}else{
				echo "Please fill the blanks!";
			}	
		}
		$result = mysqli_query($con, "SELECT employee_id, emp_name FROM employee");
			
?>
		<!-- Second row -->
	<div class="row">
		
		<div class="col-md-4">
			<ul class="nav nav-pills">
				<li role="presentation" class="active"><a href="home.php">Back</a></li>
			</ul>
		</div>
	</div><br/>
	<!-- third row -->
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h4 id="title-ne">Add New Item</h4><br/>
			<form class="form-horizontal" method="post" action="">
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="name">Item Name </label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="name" placeholder="Item Name">
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="control-label col-sm-2" for="price">Item Price </label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="price" placeholder="item price">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="date">Date </label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="date" placeholder="date format YYYY-MM-DD">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="employee">Employee </label>
			    <div class="col-sm-10">
			      <select name="employee" id="employee-list" class="form-control">
			      	<?php 
			      		if ($result) {
			      			while ($row = mysqli_fetch_row($result)) {
			      				echo "<option value ='" .$row[0]."'> " .$row[1]. "</option>";
			      			}
			      		}

			      	?>
			      </select>
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-10"></div>
			    <div class="col-sm-2">
			      <button type="submit" name="submit" class="btn btn-primary btn-block" id="register-btn">Register</button>
			    </div>
			  </div>
			</form>
		</div>
	</div>
</div>

<?php include_once("require/footer.php"); ?>