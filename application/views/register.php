
<div class="col-9 scheduleimg">
  <h2>Contact Path of Light Yoga Studio</h2>
    <p id="indent">Required information is marked with an asterisk (*).</p>
       
  <div>
    <?php
          echo form_open('yogacontroller/register');
          echo "<table id='register' style='width:80%'>";
          echo "<tr>";
            echo "<td class='align'>";
              echo form_label('* Name: ' . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
            echo "</td>";
            echo "<td class='align'>";
              $data_name = array(
             'name' => 'cname',
             'id' => 'std_name_id',
             'class' => 'input_box',
             'placeholder' => 'Please Enter Name'
              );
              echo form_input($data_name);
            echo "</td>";?>
            <td class="align" colspan="3">
               <?php echo form_error('cname'); ?></td>
          <?php
          echo "</tr>";
          


          echo "<tr>";
            echo "<td class='align'>";
             echo form_label('* Email: '.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
            echo "</td>";
           echo "<td class='align'>";
             $data_email = array(
            'type' => 'email',
            'name' => 'cemail',
            'id' => 'e_email_id',
            'class' => 'input_box',
            'placeholder' => 'Please Enter Email'
             );
            echo form_input($data_email);
            echo "</td>";
            ?>
            <td class="align" colspan="3">
               <?php echo form_error('cemail'); ?></td>
          <?php

           echo "</tr>";

            echo "<tr>";
            echo "<td class='align'>";
             echo form_label('* Phone: '.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
            echo "</td>";
           echo "<td class='align'>";
             $data_phone = array(
            'type' => 'phone',
            'name' => 'cphone',
            'id' => 'e_phone_id',
            'class' => 'input_box',
            'placeholder' => 'Please Enter 10 digit number'
             );
            echo form_input($data_phone);
            echo "</td>";
            ?>
            <td class="align" colspan="3">
               <?php echo form_error('cphone'); ?></td>
          <?php
            echo "</tr>";
     
           echo "<tr>";  
            echo "<td class='align'>";      
              echo form_label('* Address: '.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
            echo "</td>";
            echo "<td class='align'>";
            echo "<div class='textarea_input'>";
            $data_textarea = array(
              'name' => 'caddress',
              'rows' => 3,
              'cols' => 20
             );
             echo form_textarea($data_textarea);
             echo "</div>";
              echo "</td>";?>
            <td class="align" colspan="3">
               <?php echo form_error('caddress'); ?></td>
          <?php
           echo "</tr>";
           echo "</div>";

           echo "<tr>";  
            echo "<td class='align'>"; 
            echo form_label('*Type of Class: ' . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
            echo "</td>";
            echo "<td class='align'>";
            ?>   
            <select name="typeofclass">
            <?php 

            foreach($class_type as $row)
            { ?>
              <option value="<?php echo $row['classname']; ?>"><?php echo $row['classname']; ?></option>
      <?php 
           
            }
            ?>
            </select> 

             <?php
                 //echo form_dropdown('select', $class_type, 'Gentle Hatha Yoga', 'class="dropdown_box"');

             echo "</td>";?>
            <td class="align" colspan="3">
               <?php echo form_error('typeofclass'); ?></td>

            <?php
            echo "</tr>";
        

            echo "<tr>";  
            echo "<td class='align'>"; 
            echo form_label('*Schedule: ' . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
            echo "</td>";
            echo "<td class='align'>";

          ?>   
              <select name="typeofday">
              <?php 

              foreach($day_type as $row)
              { ?>
                <option value="<?php echo $row['daysname']; ?>"><?php echo $row['daysname']; ?></option>
        <?php 
             
              }
            ?>
            </select> 

             <?php

                   

             echo "</td>";
             ?>
            <td class="align" colspan="3">
               <?php echo form_error('typeofday'); ?></td>
               <?php  
           echo "</tr>";


           echo "<tr>";  
            echo "<td class='align'>"; 
            echo form_label('*Time: ' . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
            echo "</td>";
            echo "<td class='align'>";?>
            
           <select name="typeoftime">
              <?php 
              
              foreach($time_type as $row)
              { ?>
                <option value="<?php echo $row['time']; ?>"><?php echo $row['time']; ?></option>
        		<?php 
             
             } ?>
            </select> 

            <?php
            echo "</td>"; ?>
            <td class="align" colspan="3">
               <?php echo form_error('typeoftime'); ?></td>
               <?php  
            echo "</tr>";




           echo "<tr>";  
            echo "<td class='align'>";      
              echo form_label('*Password: '.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
            echo "</td>";
            echo "<td class='align'>";
            $data_password = array(
                        'name' => 'cpassword',
                        'id' => 'password_id',
                        'class' => 'input_box',
                        'placeholder' => 'Please Enter Password'
                    );
             echo form_password($data_password);
             echo "</div>";
              echo "</td>";?>
            <td class="align" colspan="3">
               <?php echo form_error('cpassword'); ?></td>
           <?php    
           echo "</tr>";
           echo "</div>";
           echo "<br>";



          echo "<tr>";
              echo "<td class='align'></td>";
              echo "<td class='align'>";
                    echo form_submit('submit', 'Submit', "class='submit'");

           ?>
           <?php echo form_close(); ?>
            </td>
          </tr>
          
       </table>
		 <br>
  </div>
 </div>
</div>