<div id="request" style="margin-left: 50px; margin-top: 30px; border: 1px solid black; width: 800px; padding: 10px;">

	<form class="" method="post" action="index.php?page=request&action=submit">
		<label>Requested Service: </label>
		<?php foreach ($requestService as $service) { ?>
			<input type="text" name="request_service" required value="<?php echo $service['name']; ?>"><br><br>
		<?php } ?>
		<br><br>
		<label>Full Name:</label>
		<input type="text" name="fullname" required/><br><br>
		<label>Phone 1:</label>
		<input type="phone" name="phone_1" required/><br><br>
		<label>Phone 2 (Optional):</label>
		<input type="phone" name="phone_2" /><br><br>
		<label>Location:</label>
		<select name="location">
			<?php foreach ($locations as $location) { ?>
				<option value="<?php echo $location['id'] ?>"><?php echo $location['name']; ?></option>
			<?php } ?>
		</select><br><br>
		<textarea name="address" placeholder="Address" required ></textarea><br><br>
		<textarea name="landmark" placeholder="Landmark" required></textarea><br><br>
		<label>Budget:</label>
		<input type="text" name="budget" required/><br><br>
		<textarea name="description" required placeholder="Please Describe your requested service (I want ......)" cols="50" ></textarea><br><br>
		<input type="hidden" name="requestid" value="<?php echo $rand = 'rwr'.rand(1,1000) ?>">

		<input type="submit" name="submit" value="Request">
	</form>
	<p>Please note that : The requested service vendor will be contacted based on your request and available budget.</p>
	<a href="index.php?page=home">Home</a>
</div>