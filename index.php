<?php

require_once './include/dbConnect.php';

$query = "select * from employee order by emp_joining_date desc";

$result = mysqli_query($connection, $query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
	<div class="container-fluid mt-5">
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th scope="col"></th>
								<th scope="col">Employee ID</th>
								<th scope="col">Employee Name</th>
								<th scope="col">Employee Email</th>
								<th scope="col">Employee Department</th>
								<th scope="col">Employee Joining Date</th>
								<th scope="col">Employee Experience</th>
								<th scope="col">Employee Active</th>
							</tr>
						</thead>
						<tbody>
							<!-- Code for fetch table rows -->
							<?php if ($result -> num_rows > 0): ?>
							<?php while($array = mysqli_fetch_row($result)): ?>
							<!-- Code end here -->
							<tr>
								<!--- Code for set green flag based on the condition -->
								<th scope="row">
									<?php
									if($array[5] > 5){
								?>
									<img src="https://img.icons8.com/color/30/000000/green-flag.png">
									<?php
									}
								?>
								</th>
								<!-- Code end here -->
								<td><?php echo $array[0];?></td>
								<td><?php echo $array[1];?></td>
								<td><?php echo $array[2];?></td>
								<td><?php echo $array[3];?></td>
								<td><?php echo $array[4];?></td>
								<td><?php echo $array[5];?></td>
								<td><?php echo $array[6];?></td>
							</tr>
							<?php endwhile; ?>
							<?php else: ?>
							<tr>
								<td colspan="3" rowspan="1" headers="">No Data Found</td>
							</tr>
							<?php endif; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
