<?php
	$user = $data['user'];
	$login_type = $data['login_type'];
	$user_id = $login_type == 'Client' ? $user->client_id : $user->employee_id;
	$branch_id = $user->branch_id;
	$first_name = $user->first_name;
	$last_name = $user->last_name;
	$street_address = $user->street_address;
	$join_date = $user->join_date;
	$email = $user->email;
	$phone = $user->phone;

	$address = $data['address'];
	$postal_code = $address->postal_code;
	$city = $address->city;
?>

<html>
<head>
	<?= $this->header() ?>
</head>

<body>

	<div class="templateux-cover" style="background-image: url(../images/slider-1.jpg); resize:verticle;overflow:auto;">
		<div class="container">
			<div class="col-md-8">
	<br />

	<div><h2>Edit Contact Information</h2></div>

	<br />

	<form method="POST" action="/profile/edit">
		<div>
			First Name<br />
			<input type="text" name="first_name" value="<?= $first_name ?>" required class="form-control" style="width:auto;"/>
		</div>

		<br />

		<div>
			Last Name<br />
			<input type="text" name="last_name" value="<?= $last_name ?>" required class="form-control" style="width:auto;"/>
		</div>

		<br />

		<div>
			Street Address<br />
			<input type="text" name="street_address" value="<?= $street_address ?>" required class="form-control" style="width:auto;"/>
		</div>

		<br />

		<div>
			City<br />
			<input type="text" name="city" value="<?= $city ?>" required class="form-control" style="width:auto;"/>
		</div>

		<br />

		<div>
			Postal Code<br />
			<input type="text" name="postal_code" value="<?= $postal_code ?>" required class="form-control" style="width:auto;"/>
		</div>

		<br />

		<div>
			Phone<br />
			<input type="text" name="phone" value="<?= $phone ?>" required class="form-control" style="width:auto;"/>
		</div>

		<br />

		<div>
			Email<br />
			<input type="text" name="email" value="<?= $email ?>" required class="form-control" style="width:auto;"/>
		</div>

		<br />

		<button type="submit" name="editcontactinformation" class="btn btn-outline-success" value="true">Edit Contact Information</button>
	</form>

	<br />

	<div><a href="/profile"><button type="submit" class="btn btn-outline-danger" value="true">Go Back</button></a></div>
		<br />
	</div>
	</div>
	</div>
</body>
</html>