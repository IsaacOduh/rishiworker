<div id="service" style="margin-left: 50px; margin-top: 30px; border: 1px solid black; width: 800px; padding: 10px;">
	<?php echo $id; ?>
	<br>
	<br>
	<?php foreach ($result as $request) { ?>
		<h3>Request Details</h3>
		<p>Request Id: <?php echo $request['request_id']; ?></p>
		<p>Service: <?php echo $request['request_service']; ?></p>
		<p>Full Name: <?php echo $request['fullname']; ?></p>
		<p>Phone(s): <?php echo $request['phone_1']; if($request['phone_2']){echo ' | '.$request['phone_2'];} ?></p>
		<p>Location: <?php echo $location->findone($request['location']); ?></p>
		<p>Address: <?php echo $request['address']; ?></p>
		<p>Landmark: <?php if($request['landmark']){echo $request['landmark'];} ?></p>
		<p>Budget: <?php echo $request['budget']; ?></p>
		<p>Description: <?php echo $request['description'] ?></p>
	<?php } ?>	
	<a href="index.php?page=requests">Back</a>
</div>