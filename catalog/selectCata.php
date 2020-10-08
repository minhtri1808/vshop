  <?php
    if (isset($_POST["id"])) {
        $output = '';
        $connect = mysqli_connect("localhost", "root", "", "du_an1");
        $query = "SELECT * FROM catalog WHERE id = '" . $_POST["id"] . "'";
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
                     <td width="30%"><label>Address</label></td>  
                     <td width="70%">' . $row["parent_id"] . '</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Gender</label></td>  
                     <td width="70%">' . $row["sethome"] . '</td>  
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