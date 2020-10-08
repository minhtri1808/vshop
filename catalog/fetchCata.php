 <?php
    //fetch.php  
    $connect = mysqli_connect("localhost", "root", "", "du_an1");
    if (isset($_POST["id"])) {
        $query = "SELECT * FROM catalog WHERE id = '" . $_POST["id"] . "'";
        $result = mysqli_query($connect, $query);
        $row = mysqli_fetch_array($result);
        echo json_encode($row);
    }
    ?>