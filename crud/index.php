<?php
include 'server.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>CRUD: CReate, Update, Delete PHP MySQL</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <?php if (isset($_SESSION['msg'])) { ?>
        <div class="msg">
            <?php
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
            ?>
        </div>
    <?php } ?>
    <?php $results = mysqli_query($db, "SELECT * FROM info"); ?>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_array($results)) { ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><a href="#">Edit</a></td>
                    <td><a href="#">Delete</a></td>
                </tr>
            <?php  } ?>
        </tbody>
    </table>
    <form method="post" action="server.php">
        <div class="input-group">
            <label>Name</label>
            <input type="text" name="name" value="">
        </div>
        <div class="input-group">
            <label>Address</label>
            <input type="text" name="address" value="">
        </div>
        <div class="input-group">
            <button class="btn" type="submit" name="save">Save</button>
        </div>
    </form>
</body>

</html>