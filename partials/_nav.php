<?php
session_start();
$loggedin = false;
if (isset($_SESSION['username']) && $_SESSION['loggedin'] == true) {

    $loggedin = true;
}

echo '
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Hello! ' . $_SESSION["username"] . '</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    
                </li>
                ';
if (!$loggedin) {
    echo '
                <li class="nav-item">
                    <a class="nav-link" href="/Prototype/loginsystem/login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Prototype/loginsystem/signup.php">Signup</a>
                </li>';
} else {
    echo '
                <li class="nav-item">
                    <a class="nav-link" href="/Prototype/loginsystem/logout.php">Logout</a>
                </li>';
}
echo '


            </ul>
            
        </div>
    </div>
</nav>
';
