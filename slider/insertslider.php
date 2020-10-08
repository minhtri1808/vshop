<?php
$connect = mysqli_connect("localhost", "root", "", "du_an1");

if (!empty($_POST)) {
    $output = '';
    $message = '';
    $name = mysqli_real_escape_string($connect, $_POST["name"]);
    $note = mysqli_real_escape_string($connect, $_POST["note"]);
    $img = mysqli_real_escape_string($connect, $_POST["image"]);
  
   
    if ($_POST["id"] != '') {
        /* nếu id khác rỗng thì update */
        $sql = "  
           UPDATE slider   
           SET name='$name',   
           note='$note'";
        if ($_POST["image"] != '') {
            $sql .= " ,image='$img' WHERE id='" . $_POST["id"] . "'";
        } else {
            $sql .= "WHERE id='" . $_POST["id"] . "'";
        }

        $message = 'Data Cập nhật thành công';
    } else {
        /* nếu id = rỗng thì insert */
        $sql = "  
           INSERT INTO slider (name, note,image)  
           VALUES('$name', '$note', '$img');  
           ";
        $message = 'Data Thêm thành công';
    }
    if (mysqli_query($connect, $sql)) {
        $output .= '<label class="text-success">' . $message . '</label>';
        $select_query = "SELECT * FROM slider ORDER BY id DESC";
        $result = mysqli_query($connect, $select_query);
        $output .= '  
                <table id="customers" class="table table-bordered">  
                     <tr>
                          <th width="20%">STT</th>
                          <th width="20%">Name</th>
                          <th width="20%">Hình ảnh</th>
                          <th width="20%">Edit</th>
                          <th width="20%">View</th>
                          <th width="20%">Delete</th>
                      </tr>';
        $i = 1;
        while ($row = mysqli_fetch_array($result)) {
            $output .= '
                     <tr>  
                          <td align="center">' . $i . '</td>  
                          <td>' . $row["name"] . '</td>  
                          <td>' . $row["image"] . '</td> 
                          <td align="center"><input type="button" name="edit" value="Edit" id="' . $row["id"] . '" class="btn btn-info btn-xs edit_data" /></td>  
                          <td align="center"><input type="button" name="view" value="view" id="' . $row["id"] . '" class="btn btn-info btn-xs view_data" /></td>  
                          <td align="center"><a  href="?act=slider&del=' . $row["id"] . '" name="delete" ><i class="fa fa-trash-o"></i></a></td>
                          </tr>  
                ';
            $i++;
        }
        $output .= '</table>
           ';
    }
    echo $output;
}