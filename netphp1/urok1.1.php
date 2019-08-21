
<?php
$variable = 10;
if (is_int($variable)) {
    echo '<span style="color:red">'.$variable ."</span> "."Is int "." "."Целое число"."<br>"."32-битное число со знаком";
} elseif (is_string($variable)) {
    echo '<span style="color:red">'.$variable ."</span> "."string "."Строка"."<br>"."Строки бывают двух типов: в двойных кавычках и одинарных.";
} elseif (is_bool($variable)) {
    echo '<span style="color:red">'.$variable ."</span> "."bool "."Логический тип"."<br>"."Переменные логического типа могут принимать два значения.";
} elseif (is_float($variable)) {
    echo '<span style="color:red">'.$variable ."</span> "."float "."Число с плавающей точкой"."<br>"."Используется для вещественных чисел.";
} elseif (is_null($variable)) {
    echo $variable ." ". "null"."Значение переменной не определено";
}

echo "<hr>";
echo "<hr>";

$var = 'one';
if (is_int($var)) {
    echo '<span style="color:red">'.$var ."</span> "."Is int "."Целое число"."<br>"."32-битное число со знаком";
} elseif (is_string($var)) {
    echo '<span style="color:red">'.$var ."</span> "."string "."Строка"."<br>"."Строки бывают двух типов: в двойных кавычках и одинарных.";
} elseif (is_bool($var)) {
    echo '<span style="color:red">'.$var ."</span> "."bool "."Логический тип"."<br>"."Переменные логического типа могут принимать два значения.";
} elseif (is_float($var)) {
    echo '<span style="color:red">'.$var ."</span> "."float "."Число с плавающей точкой"."<br>"."Используется для вещественных чисел.";
} elseif (is_null($var)) {
    echo $var ." ". "null"."Значение переменной не определено";
}

echo "<hr>";
echo "<hr>";

$var1 = true;
if (is_int($var1)) {
    echo '<span style="color:red">'.$var1 ."</span> ". "Is int " . "Целое число"."<br>"."32-битное число со знаком";
} elseif (is_string($var1)) {
    echo '<span style="color:red">'.$var1 ."</span> ". "string " . "Строка"."<br>"."Строки бывают двух типов: в двойных кавычках и одинарных.";
} elseif (is_bool($var1)) {
    echo '<span style="color:red">'.$var1 ."</span> ". "bool "."Логический тип"."<br>"."Переменные логического типа могут принимать два значения.";
} elseif (is_float($var1)) {
    echo '<span style="color:red">'.$var1 ."</span> ". "float " . "Число с плавающей точкой"."<br>"."Используется для вещественных чисел.";
} elseif (is_null($var1)) {
    echo $var1 ." ". "null"."Значение переменной не определено";
}

echo "<hr>";
echo "<hr>";

$var2 = null;
if (is_int($var2)) {
    echo '<span style="color:red">'.$var2 ."</span> ". "Is int " . "Целое число"."<br>"."32-битное число со знаком";
} elseif (is_string($var2)) {
    echo '<span style="color:red">'.$var2 ."</span> ". "string " . "Строка"."<br>"."Строки бывают двух типов: в двойных кавычках и одинарных.";
} elseif (is_bool($var2)) {
    echo '<span style="color:red">'.$var2 ."</span> ". "bool "."Логический тип"."<br>"."Переменные логического типа могут принимать два значения.";
} elseif (is_float($var2)) {
    echo '<span style="color:red">'.$var2 ."</span> ". "float " . "Число с плавающей точкой"."<br>"."Используется для вещественных чисел.";
} elseif (is_null($var2)) {
    echo $var2 ." ". "null"."Значение переменной не определено";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<style></style>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<body>
<!-- 
  <p><? echo $variable ?></p>
  <p><? echo $var ?></p> 
-->
</body>
</html>


