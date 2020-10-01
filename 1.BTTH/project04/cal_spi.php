<?php
    $fileName = $_FILES['excel_file']['tmp_name'];
    $place = $_POST['places'];
    $time = $_POST['scaleTime'];
    echo $fileName;
    $output = shell_exec("Rscript SPI.R $fileName $place $time");
    echo $output;
    echo "Hahaha";
?>