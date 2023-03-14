<?php
function get_data_row($link, $table){

$query = $link->prepare("SELECT * FROM $table");
$query->execute();
$result = $query->get_result();
$row = $result->fetch_assoc();

if(!$result)
die(mysqli_error($link));

return $row;
}

function get_data_array($link, $table){
    $query = "SELECT * FROM $table ORDER BY id DESC";
    $result = mysqli_query($link, $query);

    if(!$result)
        die(mysqli_error($link));

    $amount = mysqli_num_rows($result);
    $rows = array();

    for ($i = 0; $i < $amount; $i++){
        $row = mysqli_fetch_assoc($result);
        $rows[] = $row;
    }

    return $rows;
}

?>