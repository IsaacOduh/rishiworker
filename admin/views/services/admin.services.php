<div>
	<h1>All Services</h1>
	<br>
	<h4><a href="index?page=services&action=new">Add New</a></h4>
	<br>
	<table border="2px solid black">
		<tbody><tr><td>S/N</td><td>Service</td></tr></tbody>
		<?php $counter = 1;?>
		<?php foreach ($result as $row ) {?>
			<tr><td><a href=""><?php echo $counter++; ?></a></td><td><?php echo $row['service']; ?></td><td><a href="index.php?page=service&action=delete&id=<?php echo $row['id'] ?>">delete</a></td></tr>
		<?php } ?>
	</table>
</div>