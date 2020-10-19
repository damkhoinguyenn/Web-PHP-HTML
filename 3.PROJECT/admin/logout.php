<?php
session_start();
session_unset($_SESSION['Email']);
session_destroy();
header('location: login.php');
