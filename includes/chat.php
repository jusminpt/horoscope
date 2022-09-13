<?php

// $db = new mysqli("localhost","root","","chat");
// if($db->connection_error){
//     die("Connection failed:" . $db->connection_error);
// }
include_once 'dbh.inc.php';

$result = array();
$message = isset($_POST['message']) ? $_POST['message'] : null;
$from = isset($_POST['from']) ? $_POST['from'] : null;

// if not empty insert into table
if(!empty($message) && !empty($from)){
    $sql = "INSERT INTO `chat`(`message`, `from`) VALUES ('".$message."','".$from."')";
    $result['send_status'] = mysqli_query($conn,$sql);
}
//print messages
$start = isset($_GET['start']) ? intval($_GET['start']) : 0;
$items = $conn->query("SELECT * FROM `chat` WHERE `chat_id` >" . $start);

// get each row from database
while($row = $items->fetch_assoc()){
    $result['items'][] = $row;
}

$conn->close();

header('Access-Control-Allow-Orgin: *');
header('Content-Type: application/json');

echo json_encode($result);

