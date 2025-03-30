<?php
    $name = $_POST["username"];
    $email = $_POST["email"];
    $pass = $_POST["password"];

    if(trim($name) == "") {
        echo "Вы не ввели имя пользователя";
    }
    elseif (strlen(trim($name)) <= 1) {
        echo "Такого имени не существует";
    }
    elseif (trim($email) == "" || trim($pass) == "" || trim($_POST["message"]) == "") {
        echo "<h1>Введите все данные</h1>";
    }
    else {
        $pass = md5($pass);
        echo "Сообщение отправлено";
    }