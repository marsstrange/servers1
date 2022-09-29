<html lang="ru">
<head>
    <title>Hello world page</title>
</head>
<body>
    <?php
        $arrayString = $_GET["array"];
        $array = array_map(null, explode(',', $arrayString));
        include __DIR__ . '/func/sort.php';
        print_r(selectionSort ($array));
    ?>
</body>
</html>