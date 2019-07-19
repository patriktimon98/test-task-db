<?php

$msql = @mysqli_connect('localhost', 'root', '');
$db = mysqli_select_db($msql, 'test_task');

$json = array();

$id = uniqid();
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$color = $_POST['color'];

if ($name && $gender && $color) {
    $result = mysqli_query($msql, "INSERT INTO cat VALUES('$id', '$name', '$age', '$gender', '$color')");

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



