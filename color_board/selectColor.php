  <?php
     if (isset($_POST["id"])) {
          $output = '';
          $connect = mysqli_connect("localhost", "root", "", "du_an1");
          $query = "SELECT * FROM color_board WHERE id = '" . $_POST["id"] . "'";
          $result = mysqli_query($connect, $query);
          $output .= '  
      <div class="table-responsive">  
           <table id="customers" class="table table-bordered">';
          while ($row = mysqli_fetch_array($result)) {
               $output .= '  
                <tr class="row100 head">  
                     <td width="30%"><label>Name</label></td>  
                     <td width="70%">' . $row["name_color"] . '</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Color</label></td>  
                     <td width="70%">' . $row["color_code"] . '</td>  
                </tr> 
           ';
          }
          $output .= '  
           </table>  
      </div>  
      ';
          echo $output;
     }
     ?>