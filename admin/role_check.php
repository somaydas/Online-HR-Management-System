<?php
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <?php include 'adm_nav.php' ?>
    <h1 class="text-center">Role Table</h1>
    <form action="role_check.php" method="POST">
        <div class="mb -3 col-md-6">
            <label for="role" class="form-label">
                <h2 class="text-center">Role</h2>
            </label>
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
        <br><br>
        <button type="submit" class="btn btn-primary mt-8 col-md-6">Search</button>
    </form>
    <?php

    $conn = mysqli_connect("localhost", "root", "", "hrms");
    if (!$conn) {
        die("Error-->" . mysqli_connect_error());
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['role'])) {
            $role = $_POST["role"];
            $sql = "SELECT * FROM `employees` WHERE `Role`='$role' AND `Authorization`='yes'";
            $res = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($res);
            if ($num > 0) {
                $c = 1;
                echo '
        <h2><br><br><br>Results</h2>
        <table class="table table-dark table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            </tr>
        </thead>
        <tbody>';
                while ($row = mysqli_fetch_assoc($res)) {
                    $name = $row['name'];
                    echo '
                <tr>
                <th scope="row">' . $c . '</th>
                <td>' . $name . '</td>
                
            </tr>';
                    $c = $c + 1;
                }
                echo '
    
  </tbody>
</table>';
            } else {
                echo "<h1><br>No Results!!</h1>";
            }
        }
    }






    ?>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>