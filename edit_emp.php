<?php
	include_once("require/connection.php");
	include_once("require/header.php");
			
	$name = ""; $fathername=""; $lastname =""; $occupation = "";	
	$id = $_GET["id"];	
	if (isset($_POST["submit"])) {
			//update statements
		if (!empty($_POST["name"]) && !empty($_POST["fathername"]) && !empty($_POST["lastname"]) && !empty($_POST["occupation"])) {
			$name = $_POST["name"];
			$fathername = $_POST["fathername"];
			$lastname = $_POST["lastname"];
			$occupation = $_POST["occupation"];
		}

		$update = mysqli_query($con, "UPDATE employee SET emp_name = '$name', emp_fname = '$fathername', emp_lastname = '$lastname', emp_job= '$occupation' WHERE employee_id = $id ");
		if ($update) {
			echo "Successfully Updated";
			header("location:emp_list.php");
		}else{
			echo "Update Failed";
			header("location:edit_emp.php");
		}

		}else{
	
		$result = mysqli_query($con, "SELECT * FROM employee WHERE employee_id = $id");
		$row = mysqli_fetch_row($result);
	}	
?>
		<!-- Second row -->
	<div class="row">
		
		<div class="col-md-4">
			<ul class="nav nav-pills">
				<li role="presentation" class="active"><a href="emp_list.php">Back</a></li>
			</ul>
		</div>
	</div><br/>
	<!-- third row -->
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h4 id="title-ne">Update The Employee's</h4><br/>
			<form class="form-horizontal" action="" method="post">
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="name">Employee </label>
			    <div class="col-sm-10">
			      <input type="text" value="<?php if(!empty($row[1])){ echo $row[1]; } ?>" class="form-control" name="name" placeholder="Employee name">
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="control-label col-sm-2" for="fathername">Father Name </label>
			    <div class="col-sm-10">
			      <input type="text" value="<?php if(!empty($row[2])){ echo $row[2]; } ?>" class="form-control" name="fathername" placeholder="Father Name">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="lastname">Last Name </label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" value="<?php if(!empty($row[3])){ echo $row[3]; } ?>" name="lastname" placeholder="Last Name">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="occupation">Occupation </label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" value="<?php if(!empty($row[4])){ echo $row[4]; } ?>" name="occupation" placeholder="Occupation">
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-10"></div>
			    <div class="col-sm-2">
			      <button type="submit" name="submit" class="btn btn-primary btn-block" id="register-btn">Save Updates</button>
			    </div>
			  </div>
			</form>
		</div>
	</div>
</div>

<?php include_once("require/footer.php"); ?>