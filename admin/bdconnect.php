<?php
//соединение с бд
mysql_connect("localhost", "root", "") or die(mysql_error("srv error"));

//выбор бд
mysql_select_db("test") or die (mysql_error("bd error"));

?>