<?php?>
<div id="home" style="margin-left: 50px; margin-top: 30px; border: 1px solid black; width: 800px; padding: 10px;">
    <h3>This is the Rishiworker Platform</h3>
    <p>This platform aims to leverage technology to help connect service providers to consumers</p>
    <br>
    <p>You can take advantage of this platform and <a href="index?page=register">Become A RishiWorker</a></p>

    <br><br>

    <h4>Explore All Services</h4>
    <ul>
    	<?php foreach ($services as $service) { ?>
    	<li><?php echo $service['service']; ?> | <a href="index.php?page=service&action=view&id=<?php echo $service['id']; ?>">View</a></li>
    	<?php } ?>
    </ul>
    <br>
    <a href="index.php?page=home">Home</a>

</div>