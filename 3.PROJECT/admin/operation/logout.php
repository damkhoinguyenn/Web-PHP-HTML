<?php
session_start();
session_unset($_SESSION['FullName']);
session_destroy();
header('location: login.php');
