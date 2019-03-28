<?php
    $dbhost = 'cis282store.c8kmq1t2lwua.us-east-1.rds.amazonaws.com';
    $dbuser = 'carmonastore';
    $dbpass = 'CcEW+1986';
    $dbname = 'cis282store';
    $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if(! $conn)
    {
        die('Could not connect to instance: ' . mysqli_error($conn));
    }
    ?>