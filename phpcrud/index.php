<?php
include "action.php";
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
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="#">CRUD</a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <form class="form-inline" action="/action_page.php">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-success" type="submit">Search</button>
                </form>
            </ul>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h3 class="text-center text-dark">
                </h3>
                <?php if ($_SESSION['successmsg']) { ?>
                    <div class="text-center alert alert-<?php $_SESSION['success']; ?> alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong class="text-center"><?php echo $_SESSION['successmsg']; ?></strong>
                    </div>
                <?php } unset($_SESSION['successmsg']);
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h3 class="text-center text-info">Add Record</h3>
                <form action="action.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholer="Enter name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholer="Enter email" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" name="phone" class="form-control" placeholer="Enter phone" required>
                    </div>
                    <div class="form-group">
                        <input type="file" name="image" class="custome-file">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="add" class="btn btn-primary btn-block" value="Add Record">
                    </div>
                </form>
            </div>
            <div class="col-m-8">
                <?php
                $fetch = "SELECT * FROM crud";
                $stmt = $conn->prepare($fetch);
                $stmt->execute();
                $result = $stmt->get_result();
                ?>
                <h3 class="text-center text-info">Recordds present in the database</h3>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th colspan="3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <td><?php echo $row['id'] ?></td>
                                <td><img src="<?php echo $row['photo'] ?>" width=""></td>
                                <td><?php //echo $row['photo'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['phone'] ?></td>
                                <td><a href="details.php?details=<?php echo $row['id']; ?>" class="badge badge-primary">Details</td>
                                <td><a href="action.php?delete=<?php echo $row['id']; ?>" class="badge badge-danger">Delete</td>
                                <td><a href="edit.php?edit=<?php echo $row['id']; ?>" class="badge badge-success">Edit</td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>

            </div>
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