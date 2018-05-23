<?php

function dbconnect() {
    $db = mysqli_connect('localhost', 'root', 'root', 'webapp');
    if(mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        return null;
    }
    return $db;
}