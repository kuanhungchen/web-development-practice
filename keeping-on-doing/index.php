<?php
    session_start();

    if (!isset($_SESSION['login']) || $_SESSION['login'] == false) {
        header("Location: ./login/");
    } else {
        header("Location: ./dashboard/");
    }
?>