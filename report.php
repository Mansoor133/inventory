<?php 
	session_start();
	if (!isset($_SESSION["login"])) {
		header("location:login.php?login=faild");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Report</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width= device - width, initial - scale = 1">
	<link rel="stylesheet" type="text/css" href="Boot/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">		
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h2 style="text-align: center; background-color: #D9EDF7; padding: 10px; font-size: 19px; font-weight: bold; padding: 15px 0px;">Report of Items</h2>
			</div>
		</div><br/><br/>
		<div class="row">
			<div class="col-md-12">
				<table class="table table-striped table-bordered ">
					<thead>
						<tr id="tr-title">
							<th>Item Name</th>
							<th>Price</th>
							<th>Purchase Date</th>
							<th>Employee</th>
							<th>Operation</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Dell Latitude 7280</td>
							<td>30000 AFG</td>
							<td>2020/12/24</td>
							<td>Ahamd Wali</td>
							<td><a href="#">Edit</a></td>
						</tr>
						<tr>
							<td>Dell Latitude 7280</td>
							<td>30000 AFG</td>
							<td>2020/12/24</td>
							<td>Ahamd Wali</td>
							<td><a href="#">Edit</a></td>
						</tr>
						<tr>
							<td>Dell Latitude 7280</td>
							<td>30000 AFG</td>
							<td>2020/12/24</td>
							<td>Ahamd Wali</td>
							<td><a href="#">Edit</a></td>
						</tr>
						<tr>
							<td>Dell Latitude 7280</td>
							<td>30000 AFG</td>
							<td>2020/12/24</td>
							<td>Ahamd Wali</td>
							<td><a href="#">Edit</a></td>
						</tr>
						<tr>
							<td>Dell Latitude 7280</td>
							<td>30000 AFG</td>
							<td>2020/12/24</td>
							<td>Ahamd Wali</td>
							<td><a href="#">Edit</a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<script src="Boot/js/jquery.min.js"></script>
	<script src="Boot/js/bootstrap.min.js"></script>
</body>
</html>	