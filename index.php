<?php
$username ='admin';
$passsword = 'letmein';

if( isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW']))
{
    if($_SERVER['PHP_AUTH_USER'] === $username && $_SERVER['PHP_AUTH_PW'] === $passsword )
        echo "Регистарция прошла успешно";
    else  die("Неверная комбинация имя пользователя - пароль");

}
else
{
    header('WWW-Autheticate: Basic realm = "Restricated Area"');
    header('HTTP/1.0 401 Unauthorized');
    die("Пожалуйст, введите имя пользователя и пароль");
}
