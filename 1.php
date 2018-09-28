<html>
<head>
    <title></title>
</head>
<body>
<p>
    <?php
    $a = array("1","2","3","4");
    $b= array("5","6","7","8");
    $total = array();
    for($i=0;$i<count($a);$i++) {
        $total[] = $a[$i] * $b[$i];
    }
    var_dump($total);
    ?>
</p>
</body>
</html>