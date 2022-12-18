<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <?php include 'adm_nav.php' ?>
    <h1 class="text-center ">Upload THE DOCS</h1>
    <form action="document.php" method="post" enctype="multipart/form-data">
        <div class=" text-center row g-3 align-items-center mt-3 ">
            <div class="col-auto row g-3 align-items-center mt-3">
                <label for="file" class="col-form-label ">
                    <h1>Choose your PDF file</h1>
                    <br>
                </label>

            </div>

            <div class="col-auto col-md-6">
                <br>
                <input type="file" id="file" name="pdf" value="" required><br>
            </div>
            <input type="submit" name="submit" value="Upload">
        </div>
    </form>

    <?php
    $conn = mysqli_connect("localhost", "root", "", "hrms");
    if (!$conn) {
        die("Error-->" . mysqli_connect_error());
    }
    if (isset($_POST['submit'])) {
        $pdf = $_FILES['pdf']['name'];
        $pdf_type = $_FILES['pdf']['type'];
        $pdf_size = $_FILES['pdf']['size'];
        $pdf_tem_loc = $_FILES['pdf']['tmp_name'];
        $pdf_store = "pdf/" . $pdf;

        move_uploaded_file($pdf_tem_loc, $pdf_store);

        $sql = "INSERT INTO `docs` (`pdf`) VALUES ('$pdf')";
        $res = mysqli_query($conn, $sql);

        if ($res) {
            echo "<h1 class='text-center'><br>
            Successfully Uploaded " . $pdf . "</h1>";
        } else {
            echo "<h1 class='text-center'><br>
            Try Again!</h1>";
        }
    }


    ?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>