<?php include_once 'action1.php';
include_once 'config1.php';
?>
<?php
echo "<pre>";
print_r($_SESSION['responseclass']);
print_r($_SESSION['responsesuccess']);
echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class="col-12 row-centered" style="margin-top:20px;">
        <p>CRUD</p>
    </div>
    <?php if (isset($_SESSION['responsesuccess'])) { ?>
        <div class="alert<?php echo $_SESSION['responseclass']; ?>">
            <?php echo $_SESSION['responsesuccess']; ?>
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
        <?php unset($_SESSION['responseclass']) ?>
    <?php } ?>
    <div class="row">
        <div class="col-3 ml-10" style="margin-left:15px;">
            <form action="action1.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" name="fullname" value="<?php echo $name; ?>" class="form-control"></div>
                <div class="form-group">
                    <input type="email" name="email" value="<?php echo $email; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <input type="tel" name="phone" value="<?php echo $phone; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <input type="file" name="photo" class="form-control">
                    <input type="hidden" name="oldimage" value="<?php echo $photo; ?>">
                    <?php if (isset($_GET['edit'])) { ?>
                        <img src="<?php echo $photo; ?>" alt="" width="120" class="img-thumbnail">
                    <?php } ?>
                    </div>
                    <div class=" form-group">
                        <?php if (isset($_GET['edit'])) { ?>
                            <input type="submit" name="submit" value="Update" class="btn btn-success">
                        <?php } else { ?>
                            <input type="submit" name="submit" value="Submit" class="btn btn-danger">
                        <?php } ?>
                    </div>
                </form>
            </div>
            <div class="col-8">
                <?php
                $query = "SELECT * From crud1";
                $stmt = $conn->prepare($query);
                $stmt->execute();
                $result = $stmt->get_result();
                //echo "<pre>"; print_r($result->fetch_assoc()); echo "</pre>";
                ?>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Photo</th>
                            <th colspan="3"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['phone']; ?></td>
                                <td><img src="<?php echo $row['photo']; ?>" width="25"></td>
                                <td colspan="3">
                                    <a href="details1.php?details=<?php echo $row['id']; ?>" class="badge badge-primary p-2">Details</a>
                                    <a href="action1.php?delete=<?php echo $row['id']; ?>" class=" badge badge-danger p-2" onclick="return confirm('Do you wan to delete this record?')">Delete</a>
                                    <a href="index1.php?edit=<?php echo $row['id']; ?>" class="badge badge-success p-2">edit</a>
                                </td>

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>




        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
    </body>

    </html>