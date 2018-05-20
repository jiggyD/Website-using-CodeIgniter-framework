<div class="col-9 scheduleimg">
  <img  src="<?php echo base_url(); ?>assets/images/yogalounge.jpg" alt="door">
    <h2>Yoga Schedule</h2>
    <p id="indent">Mats, blocks, and blankets provided.Please arrive 10 minutes before your class begins. Relax in our Serenity Lounge before or after your class.</p>
    
    <?php 
          foreach ($days as $day){
          echo "<table id='schedule' class='table-striped' border='1'>";
          echo "<thead>";
            echo "<tr>";echo $day['daysname']; echo "<br>";
            echo "</tr>";
          echo "<thead>";


          echo "<tbody>";
            if ($fetch_schedule_mf->num_rows() > 0) {
          
              foreach ($fetch_schedule_mf->result() as $row){
              
                if($row->daysid==$day['daysid']){
                  echo "<li> " . $row->time. " " . $row->classname. "<br></li>";
                }
               }
            } 

         }
        echo "</tbody>"; 
        echo "</table>";
        echo "</div>"; 
        echo "</div>"; 
    ?>