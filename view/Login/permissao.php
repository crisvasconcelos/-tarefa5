<?php

session_start();
if (!$_SESSION['admin']) {
    header("location: /view/Login/sem_permissao.php");
}

