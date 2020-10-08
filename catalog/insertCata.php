<?php
$connect = mysqli_connect("localhost", "root", "", "du_an1");
if (!empty($_POST)) {
    $output = '';
    $message = '';
    $name = mysqli_real_escape_string($connect, $_POST["name"]);
    $parent_id = mysqli_real_escape_string($connect, $_POST["parent_id"]);
    $sethome = mysqli_real_escape_string($connect, $_POST["sethome"]);
    if ($_POST["id"] != '') {
        /* nếu id khác rỗng thì update */
        $query = "  
           UPDATE catalog   
           SET name='$name',   
           parent_id='$parent_id',   
           sethome='$sethome'  
           WHERE id='" . $_POST["id"] . "'";
        $message = 'Data cập nhật thành công';
    } else {
        /* nếu id = rỗng thì insert */
        $query = "  
           INSERT INTO catalog(name, parent_id, sethome)  
           VALUES('$name', '$parent_id', '$sethome');  
           ";
        $message = 'Data thêm thành công';
    }
    if (mysqli_query($connect, $query)) {
        $output .= '<label class="text-success">' . $message . '</label>';
        $select_query = "SELECT * FROM catalog ORDER BY id DESC";
        $result = mysqli_query($connect, $select_query);
        $output .= '  
                <table id="customers" class="table table-bordered">  
                     <tr>
                          <th align="center" width="20%">STT</th>
                          <th align="center" width="40%">Name Catalog</th>
                          <th align="center" width="20%">Edit</th>
                          <th align="center" width="20%">View</th>
                          <th align="center" width="20%">Delete</th>
                      </tr>';
        $i = 1;
        while ($row = mysqli_fetch_array($result)) {
            $output .= '
                     <tr>  
                          <td align="center">' . $i . '</td>  
                          <td>' . $row["name"] . '</td>  
                          <td align="center"><input type="button" name="edit" value="Edit" id="' . $row["id"] . '" class="btn btn-info btn-xs edit_data" /></td>  
                          <td align="center"><input type="button" name="view" value="view" id="' . $row["id"] . '" class="btn btn-info btn-xs view_data" /></td>  
                          <td align="center"><a  href="" name="delete"  id="' . $row["id"] . '"><i class="fa fa-trash-o"></i></a></td>
                          </tr>  
                ';
            $i++;
        }
        $output .= '</table>
           ';
    }
    echo $output;
}