<?php

include 'insertphp.php';

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
    <div class="container">
        <h1>Insert data</h1>
        <br>
        <form action="insertphp.php" method="post" id="form">

            <div class="form-group">
                <label for="">username:
                    <input type="text" name="username">
                </label>

                <label for="">password:
                    <input type="password" name="password">
                </label>
                <br>
                <input type="submit" value="Submit" name="submit" id="submit" class="btn btn-sm btn-sucess">
            </div>
        </form>

        <div class="form-control">

            <label for="">Info from database
                <select name="" id="insert">
                    <option value="">Username will be inserted here</option>
                    <?php
                    while ($newqresrow = mysqli_fetch_array($newqres)) { ?>
                        <?php echo "<pre>";
                            print_r($newqresrow);
                            echo "</pre>"; ?>
                        <option value="<?php echo $newqresrow['id']; ?>"><?php echo $newqresrow['username']; ?></option>
                    <?php }   ?>
                </select>
            </label>
            <div class="form-control">Password is
                <input type="text" value="<?php echo $newqresult['password']; ?>" id="inputpwd" disabled readonly>
            </div>
        </div>
    </div>



    <!-- jQuery -->
    <script src=" https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"> </script> <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {

            var form = $('#form');
            $("#submit").click(function() {
                $.ajax({
                    type: "post",
                    url: "insertphp.php",
                    data: $("#form input").serialize(),

                    success: function(response) {
                        console.log(response);

                    }
                });
                alert($("#form input").serialize());
            });

            $("#insert").change(function() {

                $.ajax({
                    type: "get",
                    url: "insertphp.php",
                    data: {
                        forpwd: $("#insert option:selected").val()
                    },

                    success: function(response) {
                        console.log(response);

                    }
                });

            });
        });
    </script>
</body>

</html>