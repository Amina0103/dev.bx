<?php

function readFromConsole(string $question)
{

    echo $question.': ';
    $input = trim(fgets(STDIN));

    switch ($input)

    {

        case ('true'):
            return (true);
            break;

        case ('false'):
            return (false);
            break;

        case ('!stop'):
            return (null);
            break;

        case (is_numeric($input)):
            return (+$input);
            break;

        default:
            return ((string)($input));

    }

}
