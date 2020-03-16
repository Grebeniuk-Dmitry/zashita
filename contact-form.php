<?php

/* Задаем переменные */
$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$message = htmlspecialchars($_POST["message"]);
$bezspama = htmlspecialchars($_POST["bezspama"]);

/* Ваш адрес и тема сообщения */
$address = "hammerzem@gmail.com";
$sub = "Сообщение с сайта Zem";

/* Формат письма */
$mes = "Сообщение с сайта Zem.\n
Имя отправителя: $name 
Электронный адрес отправителя: $email
Текст сообщения:
$message";


if (empty($bezspama)) /* Оценка поля bezspama - должно быть пустым*/
{
/* Отправляем сообщение, используя mail() функцию */
$from  = "From: $name <$email> \r\n Reply-To: $email \r\n";
if (mail($address, $sub, $mes, $from)) {
    header('Refresh: 5; URL=https://biznes.ua');
    echo '
    
    Письмо отправлено, через 5 секунд вы вернетесь на страницу XXX%MINIFYHTMLb16b286101c4d3d8c99062afa972896a15%';}
else {
    header('Refresh: 5; URL=https://biznes.ua');
    echo '
    
    Письмо не отправлено, через 5 секунд вы вернетесь на страницу YYY';}
}
exit; /* Выход без сообщения, если поле bezspama заполнено спам ботами */
?>