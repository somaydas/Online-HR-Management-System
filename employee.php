<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>



    <?php require 'partials/_nav.php' ?>
    <?php
    if (!isset($_SESSION['username']) && $_SESSION['loggedin'] == false) {
        header("location:/Prototype/loginsystem/login.php");
    }

    ?>
    <h1 class='mb-3 mt-5 col-md-12 text-center'>Employee Dashboard</h1>

    <div class="card">
        <div class="container text-center">
            <div class="row g-2">
                <div class="col-6">
                    <div class="p-3 border  bg-light">
                        <h1>Employee Details</h1>
                        <p class="text-center">Get in touch with your peers</p>
                        <a href="/Prototype/employee/peers.php" class="btn btn-primary mt-3 col-md-2">Click Here</a>
                    </div>
                </div>
                <!-- <div class="col-6">
                    <div class="p-3 border bg-light">
                        <h1>Payments</h1>
                        <p class="text-center">Your Earning</p>
                        <a href="/Prototype/employee/payments.php" class="btn btn-primary mt-3 col-md-2">Click Here</a>
                    </div>
                </div> -->
                <div class="col-6">
                    <div class="p-3 border bg-light">
                        <h1>Industrial Relations and Welfare</h1>
                        <p class="text-center">Hands on important docs</p>
                        <a href="/Prototype/employee/ir.php" class="btn btn-primary mt-3 col-md-2">Click Here</a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="p-3 border bg-light">
                        <h1>Feedback Portal</h1>
                        <p class="text-center">Share us your issues for immediate actions.</p>
                        <a href="/Prototype/employee/feedback.php" class="btn btn-primary mt-3 col-md-2">Click Here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>