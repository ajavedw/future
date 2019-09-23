<?php include_once('crud_ajax_logic.php') ?>
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
        <h1>CRUD Operation</h1>
        <div class="row">
            <div class="col-xs-12">
                <button type="button" class="btn btn-md btn-success pull-right" data-toggle="modal" data-target="#myModal1">Modal</button>
            </div>
        </div>
        <div class="row">
            <h2>All Records</h2>

            <div id="record-contents"></div>

        </div>
    </div>
    <!-- Modal1 -->
    <div id="myModal1" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Firstname:</label>
                        <input type="text" name="" id="firstname" class="form-control" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <label for="">Lastname:</label>
                        <input type="text" name="" id="lastname" class="form-control" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <label for="">Email:</label>
                        <input type="email" name="" id="email" class="form-control" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <label for="">Mobile:</label>
                        <input type="tel" name="" id="mobile" class="form-control" placeholder="First Name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success pull-right" data-dismiss="modal" onclick="addRecord()" style="margin-left:10px;">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <div class="testdiv"></div>

    <!--     <form action="crud_ajax_logic.php" method="post">
        <input type="text" name="test">
        <input type="text" name="testing">
        <input type="submit" value="submit" name="submit">
    </form> -->

    <!-- jQuery -->
    <script src=" https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"> </script> <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        $(function() {
            readRecords();
        });

        function readRecords() {
            var readRecords = 'readrecords';
            $.ajax({
                type: "post",
                url: "crud_ajax_logic.php",
                data: {
                    readrecords: readRecords
                },

                success: function(data, success) {
                    $('#record-contents').html(data);
                }
            });
        }

        function addRecord() {
            var firstName = $("#firstname").val();
            var lastName = $("#lastname").val();
            var email = $("#email").val();
            var mobile = $("#mobile").val();

            $.ajax({
                type: "POST",
                url: "crud_ajax_logic.php",
                data: {
                    firstname: firstName,
                    lastname: lastName,
                    email: email,
                    mobile: mobile
                },

                success: function(data, status) {
                    readRecords();

                }
            });
        }
    </script>

</body>

</html>