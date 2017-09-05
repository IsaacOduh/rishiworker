<div>
	<h1>All Requests</h1>
	<br>
	<h4><a href="index?page=vendor&action=new">Add New</a></h4>
	<br>
	<table border="2px solid black">
		<tbody><tr><td>S/N</td><td>Request ID</td><td>Service</td><td>FullName</td><td>Status</td></tr></tbody>
		<?php $counter = 1;?>
		<?php foreach ($result as $row ) {?>
			<tr>
				<td><a href=""><?php echo $counter++; ?></a></td>
				<td><?php echo $row['request_id']; ?></td>
				<td><?php echo $row['request_service']; ?></td>
				<td><?php echo $row['fullname']; ?></td>
				<td><?php if($row['status'] == 1){echo "completed";}else{echo "pending";} ?></td>
				<td><a href="index.php?page=request&action=view&id=<?php echo $row['id'] ?>">view</a></td>
				<td><a href="index.php?page=request&action=update&id=<?php echo $row['id'] ?>">update</a></td>
				<td><a href="index.php?page=request&action=delete&id=<?php echo $row['id'] ?>">delete</a></td>
			</tr>
		<?php } ?>
	</table>
</div>