<?php include('views/header.php') ?>
<?php include('admin/bdconnect.php') ?>

<div id="news">
    <?php
    //ЗАГОЛОВКИ
    if(!isset($_GET['id']))
    {
    $result = mysql_query("SELECT news_id, ntitle FROM news");
    $myrow = mysql_fetch_array($result);
    do
    {
        echo "<a href='index.php?id=".$myrow[news_id]."'>".$myrow[ntitle]."</a><br>";
    }
    while ($myrow = mysql_fetch_array($result));
    }
    //ТЕКСТ
    if(isset($_GET['id']))
    {
        $result=mysql_query("SELECT ntext, ndate, ntitle FROM news WHERE news_id='$_GET[id]'");
        $myrow=mysql_fetch_array($result);
        echo "<p id='title'>$myrow[ntitle] <br> </p>";
        echo "<p>$myrow[ntext] <br><br>$myrow[ndate] </p>";
    }
    ?>
</div>
<?php include('views/footer.php') ?>