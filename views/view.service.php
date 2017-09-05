<div id="service" style="margin-left: 50px; margin-top: 30px; border: 1px solid black; width: 800px; padding: 10px;">
	<!-- This page will load the service automatically. -->
	
	<h3>Service: <?php echo $result; ?></h3>
	<br>
	<h5>SubServices</h5>
	<ul>
		<?php foreach ($subservices as $subservice) {?>
		<li><?php echo $subservice['name'] ?> | <a href="index.php?page=request&action=new&id=<?php echo $subservice['id']; ?>">Request</a></li>
		<?php } ?>
	</ul>
	<br>
	<a href="index.php?page=home">Home</a>
</div>