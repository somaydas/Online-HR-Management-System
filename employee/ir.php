<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <?php include 'emp_nav.php' ?>
    <h1 class="text-center">Welcome to Feedback Portal</h1>
    <?php

    $conn = mysqli_connect("localhost", "root", "", "hrms");
    if (!$conn) {
        die("Error-->" . mysqli_connect_error());
    }


    $sql = 'SELECT * FROM `docs`';
    $res = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($res);
    if ($num > 0) {
        $c = 1;
        echo '
        <h2><br><br>Results</h2>
        <table class="table table-dark table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Download Link</th>
            </tr>
        </thead>
        <tbody>';
        while ($row = mysqli_fetch_assoc($res)) {
            $name = $row['pdf'];
            echo '
                <tr>
                <th scope="row">' . $c . '</th>
                <td>' . $name . '</td>
                <td>';
            echo '<a download="' . $name . '" href="/Prototype/admin/pdf/' . $name . '">Click to download</a>';
            echo '</td>
                
                
            </tr>';
            $c = $c + 1;
        }
        echo '
    
  </tbody>
</table>';
    } else {
        echo "<h1><br>No Results!!</h1>";
    }
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>