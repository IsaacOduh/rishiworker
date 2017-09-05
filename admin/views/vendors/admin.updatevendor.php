<div id="home" style="margin-left: 50px; margin-top: 30px; border: 1px solid black; width: 800px; padding: 10px;">
   	<h3>Update vendor</h3>
   	<?php foreach ($result as $vendor) { ?>
		<form id="register" method="post" action="index.php?page=vendor&action=confirmupdate">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
	    	<input type="text" name="fullname" value="<?php echo $vendor['name'] ?>" />
	    	<br><br>
	        <textarea name="address" id="address" cols="30" rows="5" placeholder="Enter you address Information"><?php echo $vendor['address']; ?></textarea>
	        <br>
	        <textarea name="landmark" id="address_landmark" cols="30" rows="5" placeholder="Enter any landmarks close to you (optional)"><?php echo $vendor['landmark']; ?></textarea>
	        <br><br>
	        <input type="phone" name="phone" placeholder="Enter Phone Number" value="<?php echo $vendor['phone']; ?>">
	        <br><br>
	        <input type="email" name="email" placeholder="Enter Email (optional)" value="<?php echo $vendor['email']; ?>">
	        <br><br>
	    	<select name="service" id="service">
	            <option value="<?php echo $vendor['service']; ?>" ><?php echo $service->findOne($vendor['service']); ?></option>
	    	</select>
	    	<br><br>
	    	<select name="subservice" id="subservices">
	    		<option value="<?php echo $vendor['subservice']; ?>" ><?php echo $subservice->findOne($vendor['subservice']); ?></option>
	    	</select>
	    	<br><br>
	        <select name="location" id="locations">
	            <option value="<?php echo $vendor['location']; ?>" ><?php echo $location->findOne($vendor['location']); ?></option>
	        </select>
	        <br><br>

	        <textarea name="description" id="description" cols="30" rows="5" placeholder="Please Enter your description of service rendered"><?php echo $vendor['description']; ?></textarea>
	        <br>
	        <h4>Current Status: <?php if($vendor['status'] == 0){ echo "Unverified";}else{ echo "Verified";} ?></h4>
	        <br><br>
	        <select name="status">
	        	<?php if($vendor['status'] == 0) {?>
	        	<option value="<?php echo $vendor['status']; ?>" selected><?php echo "Unverified"; ?></option>
	        	<option value="1"><?php echo "Verified"; ?></option>
	        	<?php }else{ ?>
	        	<option value="<?php echo $vendor['status']; ?>" selected><?php echo "Verified"; ?></option>
	        	<option value="1"><?php echo "Unverified"; ?></option>
	        	<?php } ?>
	        </select>
	        <input type="submit" name="submit" value="Update Vendor">
	    </form>		
	<?php } ?>			
</div>
<script type="text/javascript" src="../scripts/js/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
    $('#service').on('change',function(){
        var serviceid = this.value;
        $.ajax({
            type:"POST",
            url: '../scripts/php/getsubs.php',
            data: {id: serviceid},
            success: function(result){
                $("#subservices").html(result);
            }
        });
    });
</script>