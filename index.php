<html>
<head>
    <title>Test</title>
    <link href="css/stylesheet.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="top_bar_black"> <p id="text">NEWS</p></div>

<div id="news">
    <?php
    $news = file_get_contents("bd/news.txt");
    $news = explode("\n", $news);
    for ($i = 0; $i < count($news); $i++) {
        $new = explode(";", $news[$i]);
        ?>
        <h1><?=$new[0]?></h1>
        <p><?=$new[1]?></p>
        <p><?=$new[2]?></p>
    <?php } ?>
</div>
<div id="bottom_bar_black"></div>
<div id="copywriteblock"> Designed by <a>isteelfelix</a></div>

</body>
</html>
