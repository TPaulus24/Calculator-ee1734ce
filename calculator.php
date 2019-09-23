<?php
a: echo "Welke operatie wil je uitvoeren ( + - )" . PHP_EOL;
$operator = readLine("> ");
if ($operator == "+" || $operator == "-") {
    goto b;
} else {
    echo "Kies 1 van de 2 operaties" . PHP_EOL;
    goto a;
}
b:
echo "Eerste getal?" . PHP_EOL;
$num1 = readLine("> ");
echo "Tweede getal?" . PHP_EOL;
$num2 = readLine("> ");
    if ($operator == "+") {
        echo "Uw resultaat is " . ($num1 + $num2);
    } else if ($operator == "-") {
        echo "Uw resultaat is " . ($num1 - $num2);
    } else {
        echo "Kies 1 van de 2 operaties" . PHP_EOL;
        goto a;
    };