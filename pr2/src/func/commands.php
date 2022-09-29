<?php
    function print_res($commands) {
        foreach ($commands as $command) {
                print_r('Результат выполнения команды ' . $command . '<br>');
                exec($command, $res);
                foreach ($res as $i) {
                    print_r($i . '<br>');
            }
        }
    }
?>