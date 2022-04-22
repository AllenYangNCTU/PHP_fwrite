<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$contents="故人具雞黍，邀我至田家。\r\n";
$contents.="綠樹村邊合，青山郭外斜。\r\n";
$contents.="開軒面場圃，把酒話桑麻。\r\n";
$contents.="待到重陽日，還來就菊花。";
$num=file_put_contents("poetry2.txt",$contents);
print("Success! <br>Add ".$num." Bytes");
?>
</body>
</html>