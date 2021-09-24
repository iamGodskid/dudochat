<?php
$expire = time()+(86400*365);
$chatname = $_POST["usertag"];
setcookie('chatusername', $chatname, $expire, "/");
header("Location: chat.php", TRUE, 307);
exit();
    ?>