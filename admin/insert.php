<?php
include('bdconnect.php');
//ДОБАВЛЕНИЕ ЗАПИСЕЙ
if(isset($_POST['title_post']) AND isset($_POST['text_post']))
{
    $result = mysql_query("INSERT INTO news (ntitle,ntext,ndate) VALUES ('$_POST[title_post]','$_POST[text_post]', NOW())");
    header("location: /1/index.php");
    exit;
}
//ДОБАВЛЕНИЕ ЗАПИСЕЙ
?>