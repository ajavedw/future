  <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "formdb";

    $conn = new mysqli($servername, $username, $password, $db);

    if ($conn->connect_error) {
        die("Dtabase failed:" . $conn->connect_error);
    }


    $mid = $_POST['datapost'];
    $q2 = "SELECT * FROM classes where mid='$mid'";
    $result2 = mysqli_query($conn, $q2);
    while ($row2 = mysqli_fetch_array($result2)) { ?>
      <option value="<?php echo $row2['mid']; ?>"><?php echo $row2['class']; ?></option>
  <?php } ?>