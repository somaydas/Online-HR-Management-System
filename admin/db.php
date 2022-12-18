<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <?php

    $conn = mysqli_connect("localhost", "root", "", "hrms");
    if (!$conn) {
        die("Error-->" . mysqli_connect_error());
    }

    $sql = "SELECT * FROM `employees` WHERE `Authorization`='no' OR `Salary`='0'";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($res);
    $name = $row['name'];
    echo ' <h1 class="text-center mb-3 col-md-6">Authorization for ' . $name . '</h1>';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $salary = $_POST['salary'];
        if (isset($_REQUEST['check'])) {
            $data = $_REQUEST['check'];
            // echo "$data";
        }
        if ($data == "verf") {

            $sql = "UPDATE `employees` SET `Authorization` = 'yes', `Salary` = '$salary' WHERE `Name` = '$name';";
            $res = mysqli_query($conn, $sql);
            header("location:/Prototype/admin/newuser.php");
        } else {
            $sql = "DELETE FROM `employees` WHERE `Name` = '$name'";
            $res = mysqli_query($conn, $sql);
            header("location:/Prototype/admin/newuser.php");
        }
    }

    ?>

    <form action="/Prototype/admin/db.php" method="POST">
        <div class="btn-group mb-3 col-md-6" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="check" value="verf" id="employee" autocomplete="off">
            <label class="btn btn-outline-primary" for="employee">Selected</label>
            <input type="radio" class="btn-check" name="check" value="notverf" id="admin" autocomplete="off">
            <label class="btn btn-outline-primary" for="admin">Not Selected</label>

        </div>
        <div class="mb-3 col-md-6">
            <label for="salary" class="form-label text-center">
                <h2>Enter Salary</h2>
            </label>
            <input type="text" class="form-control" id="salary" name="salary">
        </div>

        <button type="submit" class="btn btn-primary mb-3 col-md-6">Submit</button>
    </form>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>