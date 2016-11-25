<!DOCTYPE html>
<html>
<head>
    <title>homework6</title>
    <meta charset="utf-8">
</head>
<body>
<?php
$color = [
    "fcolor"=>"red",
    "scolor"=>"blue",
    "tcolor"=>"gray"
];
// $color = array("fcolor"=>"red","scolor"=>"blue","tcolor"=>"gray");
foreach($color as $x => $_value) {
    // echo $_value;
    echo "<div style=background:" . $_value. ">php</div>";
    // echo "<div style="background:".$_value."></div>";
}
?>
</body>
</html>