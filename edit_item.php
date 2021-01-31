<?php
	include_once("require/connection.php");
	include_once("require/header.php");
	$name =""; $price=""; $date=""; $employee="";
	$id = $_GET["id"];
	if (isset($_POST["submit"])) {
		if (!empty($_POST["name"]) && !empty($_POST["price"]) && !empty($_POST["date"])) {
				$name = $_POST["name"];
				$price = $_POST["price"];
				$date = $_POST["date"];
				$employee = $_POST["employee"];
			}			
				$update = mysqli_query($con, "UPDATE items SET item_name = '$name', item_price = $price, item_date = '$date', employee_id= $employee WHERE item_id = $id ");
				if ($update) {
					echo "Successfully Updated";
					header("location:home.php");
				}else{
					echo "Update Failed";
					header("location:edit_item.php");
				}

		}
		
		$result = mysqli_query($con, "SELECT employee_id, emp_name FROM employee");

		$resulti = mysqli_query($con, "SELECT * FROM items WHERE item_id = $id");
		$rowi = mysqli_fetch_row($resulti);
			
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
			<h4 id="title-ne">Update The Item</h4><br/>
			<form class="form-horizontal" method="post" action="">
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="name">Item Name </label>
			    <div class="col-sm-10">
			      <input type="text" value="<?php if(!empty($rowi[1])){ echo $rowi[1];} ?>" class="form-control" name="name" placeholder="Item Name">
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="control-label col-sm-2" for="price">Item Price </label>
			    <div class="col-sm-10">
			      <input type="text" value="<?php if(!empty($rowi[2])){ echo $rowi[2];} ?>" class="form-control" name="price" placeholder="item price">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="date">Date </label>
			    <div class="col-sm-10">
			      <input type="text" value="<?php if(!empty($rowi[3])){ echo $rowi[3];} ?>" class="form-control"  name="date" placeholder="date format YYYY-MM-DD">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="employee">Employee </label>
			    <div class="col-sm-10">
			      <select name="employee" id="employee-list" class="form-control">
			      	<?php 
			      		if ($result) {
			      			while ($row = mysqli_fetch_row($result)) {
			      				if ($rowi[4] == $row[0]) {
			      					echo "<option selected= 'selected' value= '".$row[0]."'> ".$row[1]."</option>";
			      				}else{
			      					echo "<option value ='" .$row[0]."'> " .$row[1]. "</option>";	
			      				}
			      				
			      			}
			      		}

			      	?>
			      </select>
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