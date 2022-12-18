<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <?php include 'partials/_nav.php' ?>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include 'partials/_dbconnect.php';
        $name = $_POST["username"];
        $password = $_POST["pass"];
        $cpassword = $_POST["cpass"];
        $dob = $_POST["birthday"];
        $address = $_POST["address"];
        $role = $_POST["role"];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $auth = "no";
        $salary = "0";

        if ($cpassword != $password || ($name) == NULL || $password == NULL) {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Wrong Credentials</strong> Retype!!.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        } else {



            $sql = "INSERT INTO `employees` ( `name`, `password`, `Mobile`, `Email`, `DOB`, `DOJ`, `Role`, `Authorization`, `Address`, `Salary`, `Feedback`) VALUES ( '$name', '$password', '$mobile', '$email', '$dob', current_timestamp(), '$role', '$auth', '$address', '$salary','')";
            $res = mysqli_query($conn, $sql);
            if ($res) {
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Success! </strong>' . $name . ' signedup successfully!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            }
        }
    }
    ?>


    <div class="container">
        <h1 class='text-center'>Signup to our Website</h1>



        <form class="row g-3" action="/Prototype/loginsystem/signup.php" method="post">
            <div class="mb-3 col-md-6">
                <label for="username" class="form-label">Username</label>
                <input type="username" class="form-control" id="username" name="username">

            </div>
            <div class="mb-3 col-md-6">
                <label for="pass" class="form-label">Password</label>
                <input type="password" class="form-control" id="pass" name="pass">

            </div>
            <div class="mb-3 col-md-6">
                <label for="cpass" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="cpass" name="cpass">
                <div id="pass" class="form-text">Make sure to type the same passcode.</div>
            </div>
            <div class="mb-3 col-md-6">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address">
            </div>
            <div class="mb-3 col-md-6">
                <label for="mobile" class="form-label">Contact Number</label>
                <input type="tel" class="form-control" id="mobile" name="mobile">

            </div>
            <div class="mb-3 col-md-6">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>


            <div class="mb -3 col-md-6">
                <label for="role" class="form-label">Role</label>
                <select class="form-select" aria-label="Default select example" name="role">
                    <option selected>Open this select menu</option>
                    <option value="Frontend">Frontend</option>
                    <option value="Backend">Backend</option>
                    <option value="Design">Design</option>
                    <option value="Coder">Code</option>
                    <option value="Security">Security</option>
                    <option value="Marketing">Marketing</option>
                </select>
            </div>
            <div class="mb-5 col-md-6 ">
                <label for="birthday">Date of Birth</label>
                <br>
                <input type="date" id="birthday" name="birthday">
            </div>




            <button type="submit" class="btn btn-primary mt-8 col-md-12">SignUp</button>
        </form>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>