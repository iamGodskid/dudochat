<?php
include('dbconnect.php');

mysqli_select_db($conn, 'chat');

$collectmessage = $_POST['inputarea'];
$coll = $_COOKIE['chatusername'];

$send = "INSERT INTO chats
(messages, tag)VALUE
('$collectmessage','$coll')";
if(mysqli_query($conn, $send)){
    echo 'posted';
}else{
    echo 'couldnt send message'.mysqli_error($conn);
}
header('refresh:0;url=chat.php');
exit();
?>