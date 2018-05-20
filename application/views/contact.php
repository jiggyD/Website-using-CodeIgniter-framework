<div class="col-9 scheduleimg">
	<h2>Contact Path of Light Yoga Studio</h2>
    <p id="indent">Required information is marked with an asterisk (*)</p>
    
       
	<div>
    <?php
          echo form_open('yogacontroller/contact');
          echo "<table id='register'>";
          echo "<tr>";
            echo "<td class='align'>";
              echo form_label('* Name: ' . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
            echo "</td>";
            echo "<td class='align'>";
              $data_name = array(
             'name' => 'std_name',
             'id' => 'std_name_id',
             'class' => 'input_box',
             'placeholder' => 'Please Enter Name'
              );
              echo form_input($data_name);
            echo "</td>";?>
            <td class="align" colspan="2">
               <?php echo form_error('std_name'); ?></td>

               
           <?php    
          echo "</tr>";
          echo "<br>";
          echo "<tr>";
            echo "<td class='align'>";
             echo form_label('* Email: '.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
            echo "</td>";
           echo "<td class='align'>";
             $data_email = array(
            'type' => 'email',
            'name' => 'std_email',
            'id' => 'e_email_id',
            'class' => 'input_box',
            'placeholder' => 'Please Enter Email'
             );
            echo form_input($data_email);
            echo "</td>";?>
            <td class="align" colspan="2">
               <?php echo form_error('std_email'); ?></td>

               
           <?php    
           echo "</tr>";
           echo "<br>";

           echo "<tr>";  
            echo "<td class='align'>";      
              echo form_label('* Address: '.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
            echo "</td>";
            echo "<td class='align'>";
            echo "<div class='textarea_input'>";
            $data_textarea = array(
              'name' => 'address',
              'rows' => 5,
              'cols' => 20
             );
             echo form_textarea($data_textarea);
             echo "</div>";
              echo "</td>";?>
            <td class="align" colspan="2">
               <?php echo form_error('address'); ?></td>

               
           <?php    
           echo "</tr>";
           echo "</div>";
           echo "<br>";
          
           echo "<tr>";
              
              echo "<td class='align' colspan='2'>";
                    echo form_submit('submit', 'Submit', "class='submit'");
                         ?>
           
            </td>
          </tr>
          

          <?php  echo form_close();?>
       </table>
		 <br><br><br><br><br> 
  </div>
 </div>
</div>