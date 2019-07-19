<?php

$msql = @mysqli_connect('localhost', 'root', '');
$db = mysqli_select_db($msql, 'test_task');

$json = array();

$id = $_POST['id'];

if($id) {
    $result = mysqli_query($msql, "DELETE FROM cat WHERE id = '$id'");

    if ($result) {
        $json['data'] = 'ok';
        echo json_encode($json);
    } else {
        $json['data'] = 'error';
        echo json_encode($json);
    }
} else {
    $json['data'] = 'empty';
    echo json_encode($json);
}

mysqli_close($msql);
