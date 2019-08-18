<?php
require "header.php";
?>
<main>
    <div class="wrapper-main col-xs-7">
        <section class="section-default">
            <h1>
                Sign up!
            </h1>
            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="uid" placeholder="username" class="form-control">
                <input type="email" name="mail" placeholder="email" class="form-control">
                <input type="password" name="pwd" placeholder="password" class="form-control">
                <input type="password" name="pwd-repeat" placeholder="repeat password" class="form-control">

                <button type="submit" name="signup-submit" class="btn btn-md">Signup</button>
            </form>
        </section>
    </div>
</main>
<?php
require "footer.php";
?>