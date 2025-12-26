<?php

function isArithmeticProgression(float $a, float $b, float $c): string
{
    return ($b - $a === $c - $b) ? 'YES' : 'NO';
}

echo "Введите три числа через пробел: ";
$input = trim(fgets(STDIN));
$numbers = array_map('floatval', explode(' ', $input));

if (count($numbers) !== 3) {
    fwrite(STDERR, "Ошибка: введите ровно три числа.\n");
    exit(1);
}

[$a, $b, $c] = $numbers;
echo "Результат: " . isArithmeticProgression($a, $b, $c) . "\n";