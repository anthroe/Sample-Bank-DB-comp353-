<?php
	$employee = $data['employee'];
	$employee_id = $employee->employee_id;
	$branch_id = $employee->branch_id;
	$department = $employee->department;
	$first_name = $employee->first_name;
	$last_name = $employee->last_name;
	$title = $employee->title;
	$street_address = $employee->street_address;
	$phone = $employee->phone;
	$email = $employee->email;
	$salary = $employee->salary;
	$start_date = $employee->start_date;
	$active = $employee->active;

	$address = $data['address'];
	$postal_code = $address->postal_code;
	$city = $address->city;

	$countryT = $data['country'];
	$country = $countryT->country;
	$province = $countryT->province;

	$schedules = $data['schedules'];
?>

<html>
<head>
	<?= $this->header() ?>
</head>

<body>

	<div class="templateux-cover" style="background-image: url(../../images/slider-1.jpg);resize:verticle;overflow:auto;">
		<div class="container">
			<div class="col-md-8">
	<br />

	<div><h2>Employee Details</h2></div>

	<br />
<table class="table table-striped">
	<tr><th>Employee #: <?= $employee_id ?></div></tr></th>
	<tr><th>Branch #: <?= $branch_id ?></div></tr></th>
	<tr><th>Department: <?= $department ?></div></tr></th>
	<tr><th>Name: <?= "$first_name $last_name"?></div></tr></th>
	<tr><th>Title: <?= $title ?></div></tr></th>
	<tr><th>Street Address: <?= $street_address ?></div></tr></th>
	<tr><th>City: <?= $city ?></div></tr></th>
	<tr><th>Province: <?= $province ?></div></tr></th>
	<tr><th>Postal Code: <?= $postal_code ?></div></tr></th>
	<tr><th>Phone: <?= $phone ?></div></tr></th>
	<tr><th>Email: <?= $email ?></div></tr></th>
	<tr><th>Salary: <?= $salary ?></div></tr></th>
	<tr><th>Start Date: <?= $start_date ?></div></tr></th>
	<tr><th>Active: <?= $active == true ? 'Yes' : 'No' ?></div></tr></th>
</table>
	<br />

	<div><h2>Employee Schedule</h2></div>

	<br />

	<div><a href="/employee/addSchedule/<?= $employee_id ?>"><button type="button" class="btn btn-outline-success">Add To Schedule</button></a></div>

	<br />

	<table class="table table-striped">
		<thead>
			<tr>
			<th>Type</th>
			<th>Date</th>
		</tr>
	</thead>
	<tbody>
		<?php
			for($index = 0; $index < count($schedules); $index++)
			{
				$schedule = $schedules[$index];
				$sched_type = $schedule->sched_type;
				$date = $schedule->date;
		?>
				<tr>
					<td><?= $sched_type ?></td>
					<td><?= $date ?></td>
					<td><a href="/employee/editDay/<?= $employee_id ?>">Edit</a></td>
				</tr>
		<?php
			}
		?>
	</tbody>
	</table>

	<br />

	<div><a href="/employee"><button type="button" class="btn btn-outline-danger">Go Back</button></a></div>
</br>
</div>
</div>
</div>
</body>
</html>