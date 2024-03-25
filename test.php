<?php
function validateEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function factorial($n)
{
    if ($n < 0) {
        return "Факториал отрицательного числа не определен";
    } elseif ($n === 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

function divide($a, $b)
{
    if ($b === 0) {
        return "На ноль делить нельзя";
    } else {
        return $a / $b;
    }
}

function customSort($arr)
{
    sort($arr); // Неправильное использование sort()

    return $arr;
}

// Тестирование функции проверки валидации email адреса
assert(validateEmail("example@example.com") === true);
assert(validateEmail("invalid_email") === false);
assert(validateEmail("another_example@example.com") === true);

// Тестирование функции вычисления факториала
assert(factorial(0) === 1);
assert(factorial(1) === 1);
assert(factorial(5) === 120);

// Тестирование функции деления
assert(divide(10, 2) === 5);
assert(divide(100, 0) === "На ноль делить нельзя");
assert(divide(8, 2) === 4);

// Тестирование функции сортировки
assert(customSort([3, 2, 1]) === [1, 2, 3]);
assert(customSort(['c', 'b', 'a']) === ['a', 'b', 'c']);
assert(customSort([5, 4, 6]) === [4, 5, 6]); // Неверный ожидаемый результат

echo "Все тесты успешно пройдены!";
