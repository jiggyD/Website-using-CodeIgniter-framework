<div class="col-9 classimg">
	<img  src="<?php echo base_url(); ?>assets/images/yogamat.jpg" alt="door">
	
	
	<h2>Yoga Classes</h2>	


		<p id="para1">
		<?php
             if ($fetch_classes->num_rows() > 0) {
    				// output data of each row
    		foreach ($fetch_classes->result() as $row){

       			 echo "<b>" . $row->classname. "</b><br> " . $row->description. "<br>";
   			 }
			} else {
    				echo "0 results";
			}
		?>
		</p>
</div>

</div>
