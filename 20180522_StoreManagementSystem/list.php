<?php
require_once('models/ListModel.php');

function listView() {
    $model = new ListModel();
    $data = $model->getList();

    $listHtml = '<ul>';
    foreach($data as &$row) {
        $user_name = $row['name'];
        $listHtml .= "<li>$user_name</li>";
    }
    $listHtml .= '</ul>';

    header('Content-type: text/html; charset=utf-8');
    $html = file_get_contents ('views/list.phtml');
    $html = str_replace('<php listData>', $listHtml, $html);
    echo $html;
}

listView();