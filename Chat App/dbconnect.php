<?php
$host = 'localhost:3306';
$user = 'upay';
$pass = 'upay';

$conn = mysqli_connect($host, $user, $pass);
if(!$conn){
    die('Failed to connect to mysql'.mysqli_error());
}else{
    echo 'Connected to Database';
}

$db = 'CREATE DATABASE chat';
if(mysqli_query($conn, $db)){
    echo 'Database Created';
}else{
    echo 'Failed to create database'.mysqli_error($conn);
}
$selectdb = mysqli_select_db($conn, 'chat');
$table = 'CREATE TABLE chats(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    chats varchar(500) NOT NULL,
    tag varchar(50) NOT NULL,
    PRIMARY KEY (id)
    )
    ';
    if(mysqli_query($conn, $table)){
        echo 'TABLE CREATED';
    }else{
        echo 'failed to create table'.mysqli_error($conn);
    }
?>