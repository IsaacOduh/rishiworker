<div style="margin-left: 10px;">
	<h4>Add new Subservice</h4>
	<form method="post" action="index.php?page=subservice&action=add&choice=process">
		<select name="serviceid">
			<?php foreach($result as $service){ ?>
				<option value="<?php echo $service['id']; ?>"><?php echo $service['service']; ?></option>
			<?php } ?>
		</select>
		<br>
		<br>
		<input type="text" name="subservicename"/><br>
		<input type="submit" name="submit" value="Add SubService"><br>

	</form>
</div>
