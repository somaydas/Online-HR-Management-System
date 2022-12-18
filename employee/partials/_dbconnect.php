<?php
$conn = mysqli_connect("localhost", "root", "", "hrms");
if (!$conn) {
    die("Error-->" . mysqli_connect_error());
}
