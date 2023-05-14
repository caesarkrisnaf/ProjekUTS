<?php
if (isset($_COOKIE['email'])) {
    header("Location:index.php");
} else {
    header("Location:login.php");
}
