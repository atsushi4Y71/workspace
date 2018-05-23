<?php

function loginAction() {
    header('Location: http://localhost/list.php');
}

function logionView() {
    header('Content-type: text/html; charset=utf-8');
    $html = file_get_contents ('views/login.phtml');
    echo $html;
}

if($_REQUEST['login'] == true) {
    loginAction();
    exit;
}

loginView();