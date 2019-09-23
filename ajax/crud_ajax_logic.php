<?php
$servername = "localhost";
$name = "root";
$password = "";
$db = "crudop";

$conn = mysqli_connect($servername, $name, $password, $db);

if ($conn->connect_error) {
    die("Database failed:" . $conn->connect_error);
}

if (isset($_POST['readrecords'])) {
    $data = '<table>
                <thead class="table table-bordered table-striped">
                    <th>No</th>
                    <th>First Name</th>
                    <th>Last Nme</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>';
    $dataquery = "SELECT * FROM `userinfo`";
    $result = mysqli_query($conn, $dataquery);

    if (mysqli_num_rows($result)>0) {
        $data .= '<tbody>';
        $no = 1;
        while ($eachRow = mysqli_fetch_array($result)) {
            $data .= '<tr>
            <td>'.$no.'</td>
            <td>'.$eachRow['firstname'].'</td>
            <td>'.$eachRow['lastname'].'</td>
            <td>'.$eachRow['email'].'</td>
            <td>'.$eachRow['mobile']. '</td>
            <td><button class="btn btn-md btn-success" onclick="getUserInfo('.$eachRow['id']. ')">Edit</button></td>
            <td><button class="btn btn-md btn-danger" onclick="deleteUser('. $eachRow['id']. ')">Delete</button></td>
            </tr>';
            $no++;
        }
        $data .= '</tbody>';
        $data .= '</table>';
        echo $data;
    }
}


if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['mobile'])) {


    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $query = "INSERT INTO `userinfo`(`firstname`, `lastname`, `email`, `mobile`) VALUES ('$firstName', '$lastName', '$email', '$mobile' )";

    mysqli_query($conn,$query);
}

/* $test = ($_POST['test']);
$testing = ($_POST['testing']);
if (isset(($_POST['submit']))) {
    $query = "INSERT INTO `userinfo`(`firstname`,`lastname`) VALUES ('$test','$testing')";
}
mysqli_query($conn, $query); */
?>