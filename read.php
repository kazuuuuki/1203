<?php
//テスト
$name = $_POST["name"];
$age = $_POST["age"];
$genre = $_POST["genre"];
$title = $_POST["title"];
$review = $_POST["review"];
$date = $_POST["date"];

// // ファイルに書き込み
$file = fopen("data/data.txt","a");


fwrite($file,
        "<div class='write'>投稿者：".$name."\n"."年齢："
        .$age."歳"."\n"."ジャンル：".$genre."\n"."作品名：".$title."\n"
        ."評価：".$review."\n"."鑑賞日：".$date."</div>");

fclose($file);
//テストここまで

?>

<html>
<head>
    <meta charset="utf-8">
    <title>読み込み用</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <h1 class="main_title read_title">#徒然映画記</h1>

    <ul>
        <li><a href="input.php">記録する</a></li>
    </ul>
    <div class="write_wrapper">
        <?php
        //ファイルを開く
        $openFile = fopen("./data/data.txt", "r");
        //ファイル内容を1行ずつ読み込んで出力
        while ($str = fgets($openFile)){
            echo nl2br($str);
        }

        fclose($openFile);
        ?>
    </div>
</body>

</html>