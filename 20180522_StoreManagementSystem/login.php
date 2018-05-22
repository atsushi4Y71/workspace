<?php
header('Content-type: text/html; charset=utf-8');
if($_REQUEST['login'] == true) {
    header('Location: http://localhost/list.php');
    exit;
}
$html = file_get_contents ('views/login.phtml');
echo $html;