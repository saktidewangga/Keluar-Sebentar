<?php

include("config.php");

$sql = "SELECT * FROM tbl_about";
$result = array();
$query = mysqli_query($db, $sql);
 
while($row = mysqli_fetch_array($query)){
    array_push($result, array('id' => $row['id'],
    'content' => $row['content']
));
}
echo json_encode(array("result" => $result));
?>

