<?php
session_start();
if (!isset($_SESSION['logado'])) {
    header("location: /LOGIN/login.php");
}