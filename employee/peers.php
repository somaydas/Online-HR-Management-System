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
    <?php

    $conn = mysqli_connect("localhost", "root", "", "hrms");
    if (!$conn) {
        die("Error-->" . mysqli_connect_error());
    }
    session_start();
    $user = $_SESSION['username'];
    $sql = "select * from employees where `Name` !='$user' AND `Authorization`='yes'";
    $res = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($res);
    if ($num > 0) {
        echo '
        <br>
        <h1>Your Peers Table</h1>
            <table class=" table table-dark table-striped">
            <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>

            </tr>
            </thead>
            <tbody>';
        $c = 1;
        while ($row = mysqli_fetch_assoc($res)) {
            $name = $row['name'];
            $contact = $row['Mobile'];
            $email = $row['Email'];
            $role = $row['Role'];

            echo '
  
            <tr >
            <th scope="row" >' . $c . '</th>
            <td >' . $name . '</td>
            <td >' . $contact . '</td>
            <td >' . $email . '</td>
            <td >' . $role . '</td>

            
            
            </tr>';

            $c = $c + 1;
        }
        echo
        '</tbody>
            </table>';
    }

    ?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>