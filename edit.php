<?php

$msql = @mysqli_connect('localhost', 'root', '');
$db = mysqli_select_db($msql, 'test_task');

$json = array();

$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$color = $_POST['color'];

if ($id && $name && $gender && $color) {
    $result = mysqli_query($msql, "UPDATE cat SET name = '$name', age = '$age', gender = '$gender', color = '$color' WHERE id = '$id'");

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



