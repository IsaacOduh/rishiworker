<label>Requested Service: </label>
		<select name="request_service" >
			<?php foreach ($requestService as $service ) { ?>
			<option value="<?php echo $service['id'] ?>"><?php echo $service['name']; ?></option>
			<?php } ?>
		</select><br><br>