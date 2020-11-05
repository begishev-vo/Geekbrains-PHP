<?php
//Задание №1
/* 1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу: 
    * если a и b положительные, вывести их разность;
    * если а и b отрицательные, вывести их произведение;
    * если а и b разных знаков, вывести их сумму; 
ноль можно считать положительным числом*/
 echo 'Задание 1: ';   
    $a = -4;
	$b = -7;
	if ($a >=0 && $b >= 0) {
		echo 'Разность чисел равна: '.($a - $b);
	} elseif ($a < 0 && $b < 0) {
		echo 'Произведение чисел равно: '.($a * $b);
	} elseif (($a >= 0 && $b < 0) || ($a < 0 && $b >= 0)) {
	    echo 'Сумма чисел равна: '.($a + $b);
    }  
?>
<hr>
<?php 
//Задание №2
/* 2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15*/
echo 'Задание 2: '; 
  $a = 2;
	switch ($a) {
		case 1:
			echo "1,";
		case 2:
			echo "2,";
		case 3:
			echo "3,";
		case 4:
			echo "4,";
		case 5:
			echo "5,";
		case 6:
			echo "6,";
		case 7:
			echo "7,";
		case 8:
			echo "8,";
        case 9:
			echo "9,";
        case 10:
			echo "10,";
		case 11:
			echo "11,";
		case 12:
			echo "12,";
		case 13:
			echo "13,";
        case 14:
			echo "14,15";
		break;
	}
?>

<hr>
<?php 

//Задание №3
/* 3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.*/
echo 'Задание 3: '; 

function sum($arg1, $arg2) {
	return $arg1 + $arg2;
}

function subtraction($arg1, $arg2) {
	return $arg1 - $arg2;
}

function multiply($arg1, $arg2) {
	return $arg1 * $arg2;
}

function divide($arg1, $arg2) {
	return ($arg2 === 0) ? "invalid arg2 value (=0)" : $arg1 / $arg2;
}

?>

<hr>
<?php 

//Задание №4
/* 4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).*/
echo 'Задание 4: ';

    function mathOperation($arg1, $arg2, $operation) {
	switch ($operation) {
		case "sum": 
			echo sum($arg1, $arg2);
            break;
		case "subtraction":
			echo subtraction($arg1, $arg2);
            break;
		case "multiply":
			multiply($arg1, $arg2); 
            break;
		case "divide":
			echo divide($arg1, $arg2);
            break;
		}
	}
	echo mathOperation(10, 2, divide);
?>

<hr>
<?php 

//Задание №5
/* 5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.*/
echo 'Задание 5: ';

$title = "My title";
$h1 = "<h1> fifth task </h1>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
    <body>
        <? $h1; ?>
        <footer>
	        <? echo date("Y"); ?>
        </footer>
    </body>
</html>

<hr>
<?php 

//Задание №6
/* 6. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.*/
echo 'Задание 6: ';

function power($val, $pow) {
		return ($pow == 1) ? $val : $val * power($val, $pow - 1);
	}
	echo power(2, 4);
?>

<hr>
<?php 

//Задание №7
/* 7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
22 часа 15 минут
21 час 43 минуты*/
echo 'Задание 7: ';

function today_time($period1,$period2){
        $numret1 = date(H);
        $numret2 = date(i);
        $hour = array("час","часа","часов");
        $min = array("минуту","минуты","минут");
        if ($period1=='hour') $titles1 = $hour;
        if ($period2=='min') $titles2 = $min;
        $cases = array (2, 0, 1, 1, 1, 2);
        return ($numret1." ".$titles1[ ($numret1%100>4 && $numret1100<20)? 2 : $cases[min($numret1%10, 5)] ]." ".$numret2." ".$titles2[ ($numret2100>4 && $numret2%100<20)? 2 : $cases[min($numret2%10, 5)] ]);
    }

$num = 5;
echo today_time("hour","min");
?>
