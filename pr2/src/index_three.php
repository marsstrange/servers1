<html lang="ru">

<head>
    <title>Commands</title>
</head>

<body>
    <?php
        $com = $_GET["commands"];
        $arrayCommands = explode(',', $com);
        require __DIR__ . '/func/commands.php';
        print_res($arrayCommands);
    ?>
</body>

</html>
