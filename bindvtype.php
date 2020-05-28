<?php
	
    $con = mysqli_connect("localhost","root","","start");


	$q = "SELECT * FROM `tbl_vehicle_category`";
	$run = mysqli_query($con,$q); 
	echo "<select name='type_of_vehicle' class=
	corm-control'>";
	while ($data = mysqli_fetch_assoc($run)) 
    {
    	?>
<option data-style="btn-light" value="<?php echo $data["vehicle_type"]?>">
    <?php echo $data["vehicle_type"]; ?>
</option>
<?php
    }
    echo "</select>";

?>


<!-- <select class="form-control" id="vtype"  name="type_of_vehicle" data-style="btn-light"> 
                                                      <option>Select Vehicle Type......</option>
                                                       <option>2 Wheeler</option>
                                                  </select> -->