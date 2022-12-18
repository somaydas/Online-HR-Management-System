<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <?php include 'partials/_nav.php' ?>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include 'partials/_dbconnect.php';
        $name = $_POST["username"];
        $password = $_POST["pass"];
        $chosen = false;
        if (isset($_REQUEST['check'])) {
            $data = $_REQUEST['check'];
            $chosen = true;
            // echo "$data";
        }


        if ($chosen == true) {
            $sql = "select * from $data where Name='$name' AND Password='$password'";
            $res = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($res);

            $sql = "select `Authorization` from $data where Name='$name' AND Password='$password'";
            $res = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($res);
            if ($num == 1 && $row['Authorization'] == 'yes') {
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Success! </strong>' . $name . ' Logged in successfully!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';


                $_SESSION['username'] = $name;
                $_SESSION['loggedin'] = true;
                $_SESSION['data'] = $data;




                if ($data == "admin")
                    header("location:/Prototype/admin.php");
                else {
                    header("location:/Prototype/employee.php");
                }
            } else if ($num == 1 && $row['Authorization'] == 'no') {
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>You are not yet approved by the admin</strong> Retype!!.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            } else if ($chosen == false) {
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Choose the domain.</strong> Retype!!.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            } else {

                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Invalid Credentials</strong> Retype!!.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            }
        }
    }

    ?>


    <div class="container">
        <h1 class='text-center'>Login to our Website</h1>

        <form action="/Prototype/loginsystem/login.php" method="post">
            <div class="mb-3 col-md-6">
                <label for="username" class="form-label">Username</label>
                <input type="username" class="form-control" id="username" name="username">

            </div>
            <div class="mb-3 col-md-6">
                <label for="pass" class="form-label">Password</label>
                <input type="password" class="form-control" id="pass" name="pass">

            </div>
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check" name="check" value="employees" id="employee" autocomplete="off">
                <label class="btn btn-outline-primary" for="employee">Employee</label>
                <input type="radio" class="btn-check" name="check" value="admin" id="admin" autocomplete="off">
                <label class="btn btn-outline-primary" for="admin">Admin</label>

            </div>

            <br>
            <button type="submit" class="btn btn-primary mt-5">Login</button>

            <div class="mb-3 mt-5 col-md-6">
                <a href="signup.php">New User ? </a>

            </div>

        </form>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>