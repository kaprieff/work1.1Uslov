<?php

function getDaysInMonth(int $month): ?int
{
    $days = [
        31, // январь
        28, // февраль (невисокосный год)
        31, // март
        30, // апрель
        31, // май
        30, // июнь
        31, // июль
        31, // август
        30, // сентябрь
        31, // октябрь
        30, // ноябрь
        31  // декабрь
    ];
    return ($month >= 1 && $month <= 12) ? $days[$month - 1] : null;
}

echo "Введите номер месяца (1–12): ";
$month = (int) trim(fgets(STDIN));

$days = getDaysInMonth($month);
if ($days === null) {
    fwrite(STDERR, "Ошибка: номер месяца должен быть от 1 до 12.\n");
    exit(1);
}

echo "Количество дней в месяце {$month}: {$days}\n";