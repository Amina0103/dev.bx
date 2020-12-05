<?php

require_once ('ReadFromConsole.php');

/*
 * Необходимо проверить:
 * @test true = true
 * @test false = false
 * @test !stop = null
 * @test 1.3 = 1.3
 * @test 1 = 1
 * @test text = text
 */

function readFromConsoleTest ()
{

    /* Тест для true*/
    $result = readFromConsole('Введите true');
    echo 'Результат: '. ($result). ($result === true ? ' - passed' : ' - unpassed'). PHP_EOL. PHP_EOL;


    /*Тест для false*/
    $result = readFromConsole('Введите false');
    echo 'Результат: '. ($result). ($result === false ? ' - passed' : ' - unpassed'). PHP_EOL. PHP_EOL;


    /*Тест для пустого сообщения*/
    $result = readFromConsole('Введите !stop');
    echo 'Результат: '. ($result === null ? 'null - passed' : 'not null - unpassed'). PHP_EOL. PHP_EOL;

    /*Тест для ввода числа*/
    $result = readFromConsole('Введите в сообщении 1');
    echo 'Результат: '. ($result). ($result === 1 ? ' - passed' : ' - unpassed'). PHP_EOL. PHP_EOL;

    /*Тест для текста*/
    $result = readFromConsole('Введите в сообщении Hello');
    echo 'Результат: '. ($result). ($result === 'Hello' ? ' - passed' : ' - unpassed'). PHP_EOL. PHP_EOL;

}

readFromConsoleTest();
