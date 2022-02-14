<?php

session_start();

if (isset($_SESSION['matricul'])){
    unset($_SESSION['matricul']);
}

header("Location: login.php");