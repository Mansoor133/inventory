<?php
	include_once("require/connection.php");
	include_once("require/header.php");
	$name = ""; $fathername=""; $lastname =""; $occupation = "";
	if (isset($_POST["submit"])) {
		if (!empty($_POST["name"])) {
		$name = $_POST["name"];
		$fathername = $_POST["fathername"];
		$lastname = $_POST["lastname"];
		$occupation = $_POST["occupation"];
		}
		$result = mysqli_query($con, "INSERT INTO employee VALUES(NULL, '$name', '$fathername', '$lastname', '$occupation')");
		if ($result != "") {
			echo "Successfully Registered";
		}else{
			header("location:add.emp.php?error=tryagian");
		}
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
			<h4 id="title-ne">Register New Employee</h4><br/>
			<form class="form-horizontal" action="" method="post">
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="name">Employee </label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="name" placeholder="Employee name">
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="control-label col-sm-2" for="fathername">Father Name </label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="fathername" placeholder="Father Name">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="lastname">Last Name </label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="lastname" placeholder="Last Name">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="occupation">Occupation </label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="occupation" placeholder="Occupation">
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