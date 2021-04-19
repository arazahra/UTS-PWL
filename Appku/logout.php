<?php
session_start();
//session_destroy();
unset($_SESSION['MEMBER']);
//landing page
header('location:http://localhost/Appku/index.php?hal=home');