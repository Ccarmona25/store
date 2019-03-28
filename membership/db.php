<?php
    $dbhost = 'cis282store.c8kmq1t2lwua.us-east-1.rds.amazonaws.com';
    $dbuser = 'carmonastore';
    $dbpass = 'CcEW+1986';
    $dbname = 'cis282store';
    $mysqli= new mysqli($dbhost, $dbuser,$dbpass, $dbname) or die($mysqli->error);
    ?>