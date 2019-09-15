<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "formdb";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
    die("Dtabase failed:" . $conn->connect_error);
}

?>
<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title Page</title>

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <h1 class="text-center">Get Data from database</h1>

    <form action="">

        <label for="">
            Username:
            <input type="text" name="" class="form-control">
        </label>

        <label for="">
            Password:
            <input type="text" name="" class="form-control">
        </label>

        <div>
            <label for=""> Degree:
                <select name="" id="" class="form-control" onchange="myfun(this.value)">
                    <?php
                    $q = "SELECT * FROM degree";

                    $result = mysqli_query($conn, $q);

                    while ($rows = mysqli_fetch_array($result)) { ?>
                        <option value="<?php echo $rows['mid']; ?>"><?php echo $rows['degrees']; ?></option>
                    <?php } ?>

                    <?php
                    /* understand this part
                    $result = mysqli_query($conn, $q);
                    while ($rows1 = mysqli_fetch_array($result)) {
                        echo "<pre>";
                        print_r($rows1);
                        echo "</pre>";
                    } */
                    ?>
                </select>
            </label>
            <label for="">
                <select name="" id="target">
                    <option value=""> Choose any one </option>


                </select>
            </label>
        </div>


    </form>

    <script>

            function myfun(value) {
                $.ajax({
                    type: "post",
                    url: "ajax_db_logic.php",
                    data: {
                        datapost: value
                    },

                    success: function(response) {
                        $("#target").html(response);
                    }
                });
            }

    </script>

    <!-- jQuery -->
    <script src=" https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"> </script> <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>