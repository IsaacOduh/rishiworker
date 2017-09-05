<div style="margin-left: 20px;">
	<div>
	<h3>All Locations</h3>
	<br>
	<h4><a href="index?page=locations&action=add">Add New</a></h4>
	<br>
	<table border="1px solid black">
		<tbody><tr><td>S/N</td><td>Location</td></tr></tbody>
		<?php foreach ($result_location as $row ) {?>
			<tr><td><a href=""><?php echo $row['id']; ?></a></td><td><?php echo $row['name']; ?></td><td><a href="index.php?page=service&action=delete&id=<?php echo $row['id'] ?>">delete</a></td></tr>
		<?php } ?>
	</table>
</div>
</div>