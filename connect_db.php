<?php
$connect = mysqli_connect("localhost", "root", "root", "mydb");

if ($connect = false){
    echo ('Не удалось подключиться </br>');
    echo mysqli_connect_error();
    exit();
}

else{
    echo 'Подключение c SQL работает';
}