<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<p>Vrti me dok ne dobijes tri ista zaredom !</p>
<?php
$glava = 0;
$skok = 0;
while ($glava < 20) {
    $flip = rand(0,1);
    $skok ++;
    if ($flip){
        $glava ++;
        echo "<div class=\"coin\">H</div>";
    }   else {
        $glava = 0;
        echo "<div class=\"coin\">T</div>";
    }
}
echo "<p> {$skok}  pokusaja </p>";
?>
</body>
</html>