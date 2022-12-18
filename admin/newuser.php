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
    <h1 class="text-center">Table for verification</h1>
    <?php

    $conn = mysqli_connect("localhost", "root", "", "hrms");
    if (!$conn) {
        die("Error-->" . mysqli_connect_error());
    }

    $sql = "SELECT * FROM `employees` WHERE `Authorization`='no' OR `Salary`=0";
    $res = mysqli_query($conn, $sql);

    $num = mysqli_num_rows($res);

    if ($num > 0) {
        echo '
            <table class=" table table-dark table-striped">
            <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Date of Joining</th>
            <th scope="col">Select</th>
            <th scope="col"></th>
            </tr>
            </thead>
            <tbody>';
        $c = 1;
        while ($row = mysqli_fetch_assoc($res)) {
            $name = $row['name'];
            echo '
  
            <tr >
            <th scope="row" >' . $c . '</th>
            <td >' . $name . '</td>
            <td >' . $row['DOJ'] . '</td>';

            echo '
            <td >
                <a href="db.php" class="btn btn-primary ">Click Here</a>
                
                </div>
                </form>
                
</div></td>
            
            </tr>';

            $c = $c + 1;
        }
        echo
        '</tbody>
            </table>';
    } else {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>No NEW USER! </strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
    }



    ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>