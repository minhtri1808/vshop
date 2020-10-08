  <?php
     if (isset($_POST["id"])) {
          $output = '';
          $connect = mysqli_connect("localhost", "root", "", "du_an1");
          $query = "SELECT * FROM slider WHERE id = '" . $_POST["id"] . "'";
          $result = mysqli_query($connect, $query);
          $output .= '
      <div class="table-responsive">  
           <table id="customers" class="table table-bordered">';
          while ($row = mysqli_fetch_array($result)) {
               $output .= '  
                <tr class="row100 head">  
                     <td width="30%"><label>Name</label></td>  
                     <td width="70%">' . $row["name"] . '</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Note</label></td>  
                     <td width="70%">' . $row["note"] . '</td>  
                </tr> 
               <tr>  
                     <td width="30%"><label>Hình ảnh</label></td>';
               // $a = $row["image"];
               // $images = explode(',', $a);
               // for ($i = 0; $i <= 0; $i++) {
               $output .= '<td width="70%">  <img src="upload/' . $row["image"] . '" alt=""></td>';
               // }
               $output .= '</tr> 
           ';
          }
          $output .= '  
           </table>  
      </div>  
      ';
          echo $output;
     }
     ?>