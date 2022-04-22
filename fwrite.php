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
$contents="";
$handle=fopen("poetry.txt","a");
if($handle){
    $contents.="\r\n";
    $contents.="<i>三山半落青又外，二水中分白鷺洲。</i>\r\n";
    $contents.="<i>總為浮雲能蔽日，長安不見使人愁</i>";
    $num=fwrite($handle,$contents);
    fclose($handle);
    print("Success! <br>Add ".$num." Bytes");
}
else{
    print("Fail to open file!");
}
?>
</body>
</html>