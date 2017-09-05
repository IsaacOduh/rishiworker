<div>
	<h1>All Sub-Services</h1>
	<br>
	<h4><a href="index?page=subservices&action=add">Add New</a></h4>
	<br>
	<table border="1px solid black">
		<tbody><tr><td>S/N</td> <td>Sub-Service</td> <td>Service</td><td>Status</td> </tr></tbody>
		<?php $counter = 1;?>
		<?php foreach ($result_subs as $row ) {?>
			<tr><td><a href=""><?php echo $counter++; ?></a></td><td><?php echo $row['name']; ?></td><td><?php echo $data = $service->findone($row['service_id'])  ?></td><td><?php echo $row['status']; ?></td><td><a href="index.php?page=service&action=delete&id=<?php echo $row['id'] ?>">delete</a></td></tr>
		<?php } ?>
	</table>
</div>