<?php

function determineTriangleType(float $a, float $b, float $c): string
{
    if ($a <= 0 || $b <= 0 || $c <= 0) {
        return "Не существует";
    }
    if ($a + $b <= $c || $a + $c <= $b || $b + $c <= $a) {
        return "Не существует";
    }
    if ($a === $b && $b === $c) {
        return "Равносторонний";
    }
    if ($a === $b || $b === $c || $a === $c) {
        return "Равнобедренный";
    }
    return "Разносторонний";
}

echo "Введите три положительных числа (длины сторон) через пробел: ";
$input = trim(fgets(STDIN));
$numbers = array_map('floatval', explode(' ', $input));

if (count($numbers) !== 3) {
    fwrite(STDERR, "Ошибка: введите ровно три числа.\n");
    exit(1);
}

[$a, $b, $c] = $numbers;
echo "Результат: " . determineTriangleType($a, $b, $c) . "\n";