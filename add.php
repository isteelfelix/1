<?php
include('views/header.php');
include('admin/bdconnect.php');

//ФОРМА ДОБАВЛЕНИЕ ЗАПИСЕЙ
echo "<br><br><form id='news' action='admin/insert.php' method='post' name='form_add'> Заголовок <br><br>
    <input type='text' name='title_post'><br><br>Содержание<br><br>
    <textarea name='text_post' cols=\"40\" rows=\"10\"></textarea><br><br>
    <input type='submit' value='Добавить пост'>
    </form>";
include('views/footer.php')
?>