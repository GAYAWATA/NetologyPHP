<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>	
<?php
if (isset($_POST['go'])) {
    echo 'Данные получены<br>';   
if (isset ($_POST['firstName'])) $FirstName = $_POST['firstName'];
else $FirstName = '';
if (isset ($_POST['lastName'])) $LastName = $_POST['lastName'];
else $LastName = '';
if (isset ($_POST['middleName'])) $MiddleName = $_POST['middleName'];
else $MiddleName = '';
if (isset ($_POST['code'])) $CodeWord2 = $_POST['code'];
}

$fullName = mb_strtoupper(mb_substr($FirstName, 0,1)) . mb_substr($FirstName, 1) . " " . mb_strtoupper(mb_substr($LastName, 0, 1)) . mb_substr($LastName, 1) . " " . mb_strtoupper(mb_substr($MiddleName, 0,1)) . (mb_substr($MiddleName, 1,7));
$fio = mb_strtoupper(mb_substr($FirstName, 0,1)) . "." . mb_strtoupper(mb_substr($LastName, 0, 1)) . "." . mb_strtoupper(mb_substr($MiddleName, 0,1)) . ".";
$surnameAndInitials = mb_strtoupper(mb_substr($LastName, 0, 1)) . mb_substr($LastName, 1) . " " . mb_strtoupper(mb_substr($FirstName, 0,1)) . "." . mb_strtoupper(mb_substr($MiddleName, 0,1)) . ".";
 ?>
   <body>
     <p> Полное имя: <?php echo $fullName ?></p>
     <p>Аббревиатура: ' <?php echo $fio ?> '</p>
     <p>Фамилия и инициалы: <?php echo ucfirst($surnameAndInitials) ?></p>
   </body>    
 </html>