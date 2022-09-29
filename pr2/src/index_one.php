<html lang="ru">
<head>
    <title>Figures</title>
    <style>
        body {
            background-color: black;
        }
    </style>
</head>

<body>
    <?php
        $n = htmlspecialchars($_GET['code']);
        include __DIR__ . '/func/decodefile.php';
        include __DIR__ . '/func/drawfile.php';
        $a = decode($n);
        echo draw($a["shape"], $a["color"], $a["width"], $a["height"]);
    ?>
</body>

</html>