<?php
include('dbconnect.php');
mysqli_select_db($conn, 'chat');
?>
<!doctype html
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width = device-width, initial-scale =0.6">
        <title>MESSAGES</title>
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="css/all.css">
        <script type="text/javascript" src="chat.js"></script>
    </head>
    <body onload="checkmess(), drop()">
        <div class="header">
            <i class="fas fa-arrow-left" id="bck" onclick="back();"></i>
            <span id="sender">CHAT APP</span>
            <i class="fas fa-bars" id="menu"></i>
        </div>
        <?php
        $cookie = $_COOKIE['chatusername'];
$query = mysqli_query($conn, "SELECT * FROM chats ORDER BY id DESC");
while($row = mysqli_fetch_array($query)){
$t = "<script>document.getElementById('usertag').innerHTML;</script>";
echo $t;

        ?>
        <?php
if($row['tag'] == $cookie){
?>
        <div class="messages">
<div id="mess" style="float: right; background-color: dodgerblue; position: relative">
<span id="showtag"><?php echo $row['tag'];
?></span><br/>
<span id="showmess"><?php echo $row['messages'];
?></span></div>

<?php
}else{
?>
<div id="mess" style="float: left; background-color: aqua; position: relative">
<span id="showtag"><?php echo $row['tag'];
?></span><br/>
<span id="showmess"><?php echo $row['messages'];
?></span></div>

</div>
<?php
}
?>
        </div>
        <?php
}
?>

        <div class="box">
        <center>
            <form name=" form" action="chatrelay.php" method="POST">
            <span class="addbtn"><span name='col' id="usertag">
            ...
            </span><input type="text" name="inputarea" placeholder="send message" id="sent"/></span>
            <button type="submit" onclick="send()" class="sentbtn"><i class="fas fa-paper-plane" class="sent"></i></button>
        </form></center>
        </div>

        <script>

            </script>
    </body>
</html>
<?php
exit();
?>