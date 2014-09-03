<?php

session_start();
if (!$_SESSION['logado']) {
    header("location: ../LOGIN/login.php");
}