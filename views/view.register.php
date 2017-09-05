<div id="home" style="margin-left: 50px; margin-top: 30px; border: 1px solid black; width: 800px; padding: 10px;">
    <h3>Become a Rishi Worker</h3>
    <hr>
    <form id="register" method="post" action="index.php?page=register&action=new">
    	<input type="text" name="fullname" placeholder="Enter Your Full Name"/>
    	<br><br>
        <textarea name="address" id="address" cols="30" rows="5" placeholder="Enter you address Information"></textarea>
        <br>
        <textarea name="landmark" id="address_landmark" cols="30" rows="5" placeholder="Enter any landmarks close to you (optional)"></textarea>
        <br><br>
        <input type="phone" name="phone" placeholder="Enter Phone Number">
        <br><br>
        <input type="email" name="email" placeholder="Enter Email (optional)">
        <br><br>
    	<select name="service" id="service">
            <option value="">Select a Service</option>
            <?php foreach ($result as $service) {?>
                <option value="<?php echo $service['id']; ?>"><?php echo $service['service']; ?></option>
            <?php }  ?>
    	</select>
    	<br><br>
    	<select name="subservice" id="subservices">
    		<option>Select Sub-Service</option>
    	</select>
    	<br><br>
        <select name="location" id="locations">
            <option value="">Select a Location</option>
            <?php foreach ($locations as $location) {?>
                <option value="<?php echo $location['id']; ?>"><?php echo $location['name']; ?></option>
            <?php }  ?>
        </select>
        <br><br>

        <textarea name="description" id="description" cols="30" rows="5" placeholder="Please Enter your description of service rendered"></textarea>
        <br><br>
        <input type="submit" name="submit" value="Create a New Account">
    </form>
    <h5>Please Take Note of the Following</h5>
    <p>Your registration will automatically be placed on pending status while we verify you. Only verified users will be available for contact.</p>

</div>
<script type="text/javascript" src="scripts/js/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
    $('#service').on('change',function(){
        var serviceid = this.value;
        $.ajax({
            type:"POST",
            url: 'scripts/php/getsubs.php',
            data: {id: serviceid},
            success: function(result){
                $("#subservices").html(result);
            }
        });
    });
</script>