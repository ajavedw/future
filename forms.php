<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <?php
    $fname = "";
    $lname = "";
    $email = "";
    $feedback = "";
    $gender = "";
    if (isset($_POST['submit'])) {

        //echo "<pre>"; print_r($_POST); echo "</pre>";
        function input_test($userdata)
        {
            $userdata = trim($userdata);
            $userdata = stripslashes($userdata);
            $userdata = htmlspecialchars($userdata);
            return $userdata;
        }

        $fname = input_test(($_POST["fname"]));
        $lname = input_test(($_POST["lname"]));
        $email = input_test(($_POST["email"]));
        $feedback = input_test(($_POST["feedback"]));
        if(isset($_POST["gender"])&& !empty($_POST["gender"]))
            $gender =$_POST["gender"];




        if (empty($fname)) {
            $fnameErr = "First name is required";
        }
        if (empty($lname)) {
            $lnameErr = "Last name is required";
        }
        if (empty($email)) {
            $emailnameErr = "email name is required";
        }
        if (empty($feedback)) {
            $feedbackErr = "Feedback is required";
        }
        if (empty($gender)) {
            $genderErr = "Gender name is required";
        }
    }

    ?>


    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <label for="fname">
            First Name :<input type="text" name="fname">
            <br>
            <span style="color:red;"><?php $fnameErr ?></span>
        </label>
        <label for="lname">
            Last Name :<input type="text" name="lname">
            <br>
            <span style="color:red;"><?php $lnameErr ?></span>
        </label>
        <label for="email">
            Email :<input type="email" name="email">
            <br>
            <span style="color:red;"><?php $emailnameErr ?></span>
        </label>
        <label for="gender">
            Gender <br>
            <input type="radio" name="gender" value="female">Female<br>
            <input type="radio" name="gender" value="male">Male<br>
            <input type="radio" name="gender" value="other">Other<br>
            <br>
            <span style="color:red;"><?php $genderErr ?></span>
        </label>
        <label for="feedback" style="vertical-align:top;">
            Feedback :
            <textarea name="feedback" rows="2" cols="40"></textarea>
            <br>
            <span style="color:red;"><?php $feedbackErr ?></span>
        </label>
        <input type="submit" name="submit">

    </form>
    <?php
    echo "<h1>Your details: </h1>";
    echo $fname;
    echo $lname;
    echo $email;
    echo $feedback;
    echo $gender;




    ?>
</body>

</html>