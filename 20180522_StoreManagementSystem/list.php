<?php
header('Content-type: text/html; charset=utf-8');
$html = file_get_contents ('views/list.phtml');
echo $html;