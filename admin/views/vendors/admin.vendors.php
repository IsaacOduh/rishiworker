<div>
	<h1>All Vendors</h1>
	<br>
	<h4><a href="index?page=vendor&action=new">Add New</a></h4>
	<br>
	<table border="2px solid black">
		<tbody><tr><td>S/N</td><td>Vendor</td><td>Address</td><td>Landmarks</td><td>Phone</td><td>e-mail</td><td>Service</td><td>SubService</td><td>Description</td><td>Status</td></tr></tbody>
		<?php $counter = 1;?>
		<?php foreach ($result as $row ) {?>
			<tr>
				<td><a href=""><?php echo $counter++; ?></a></td>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['address']; ?></td>
				<td><?php echo $row['landmark']; ?></td>
				<td><?php echo $row['phone']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $service->findOne($row['service']); ?></td>
				<td><?php echo $subservice->findOne($row['subservice']); ?></td>
				<td><?php echo $row['description']; ?></td>
				<td><?php if($row['status'] == 1){echo "verified";}else{echo "unverified";} ?></td>
				<td><a href="index.php?page=vendor&action=update&id=<?php echo $row['id'] ?>">update</a></td>
				<td><a href="index.php?page=vendor&action=delete&id=<?php echo $row['id'] ?>">delete</a></td>
			</tr>
		<?php } ?>
	</table>
</div>