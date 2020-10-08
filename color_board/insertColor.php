<?php
$connect = mysqli_connect("localhost", "root", "", "du_an1");
if (!empty($_POST)) {
    $output = '';
    $message = '';
    $name_color = mysqli_real_escape_string($connect, $_POST["name_color"]);
    $color_code = mysqli_real_escape_string($connect, $_POST["color_code"]);
    if ($_POST["id"] != '') {
        /* nếu id khác rỗng thì update */
        $query = "  
           UPDATE color_board   
           SET name_color='$name_color',   
           color_code='$color_code'  
           WHERE id='" . $_POST["id"] . "'";
        $message = 'Data cập nhật thành công';
    } else {
        /* nếu id = rỗng thì insert */
        $query = "  
           INSERT INTO color_board (name_color, color_code)  
           VALUES('$name_color', '$color_code');  
           ";
        $message = 'Data thêm thành công';
    }
    if (mysqli_query($connect, $query)) {
        $output .= '<label class="text-success">' . $message . '</label>';
        $select_query = "SELECT * FROM color_board ORDER BY id DESC";
        $result = mysqli_query($connect, $select_query);
        $output .= '  
                <table id="customers" class="table table-bordered">  
                     <tr>
                           <th width="20%">STT</th>
                          <th width="40%">name_color</th>
                          <th width="20%">Edit</th>
                          <th width="20%">View</th>
                          <th width="20%">Delete</th>
                      </tr>';
        $i = 1;
        while ($row = mysqli_fetch_array($result)) {
            $output .= '
                     <tr>  
                          <td align="center">' . $i . '</td>  
                          <td>' . $row["name_color"] . '</td>  
                          <td align="center"><input type="button" name="edit" value="Edit" id="' . $row["id"] . '" class="btn btn-info btn-xs edit_data" /></td>  
                          <td align="center"><input type="button" name="view" value="view" id="' . $row["id"] . '" class="btn btn-info btn-xs view_data" /></td>  
                          <td align="center"><a  href="?act=color_board&del=' . $row["id"] . '"name="delete"  id="' . $row["id"] . '"><i class="fa fa-trash-o"></i></a></td>
                          </tr>  
                ';
            $i++;
        }
        $output .= '</table>
           ';
    }
    echo $output;
}