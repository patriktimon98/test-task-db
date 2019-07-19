<?php

$msql = @mysqli_connect('localhost', 'root', '');
$db = mysqli_select_db($msql, 'test_task');

$result = mysqli_query($msql, "SELECT * FROM cat ORDER BY name");
$rowsNumber = mysqli_num_rows($result);

$catsList = array();

if ($rowsNumber) {
    for ($i = 0; $i < $rowsNumber; $i++) {
        $rowCat = mysqli_fetch_array($result);
        $catsList[] = $rowCat;
    }
}
else
    echo "List is empty";

mysqli_close($msql);

include('script.html');


