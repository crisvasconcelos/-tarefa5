<?php
session_start();
if (!isset($_SESSION['logado'])) {
    header("location: /view/Login/login.php");
}
