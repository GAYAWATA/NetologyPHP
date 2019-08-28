<?php
$CodeWord = 'nd82jaake';

if (isset($_POST['go'])) {
    echo 'Форма отправлена<br>';   
//if (isset ($_POST['login'])) $LoginName = $_POST['login'];
if (isset ($_POST['firstName'])) $FirstName = $_POST['firstName'];
else $FirstName = '';
if (isset ($_POST['lastName'])) $LastName = $_POST['lastName'];
else $LastName = '';
if (isset ($_POST['middleName'])) $MiddleName = $_POST['middleName'];
else $MiddleName = '';
if (isset ($_POST['code'])) $CodeWord2 = $_POST['code'];
}

$err = '';
    if (mb_strlen($FirstName)<1) {
      $err = 'Имя обязательно к заполнению<br>';
    }
    if (mb_strlen($LastName)<1) {
      $err = 'Фамилия обязательна к заполнению<br>';
    }
    if (mb_strlen($MiddleName)<1) {
      $err = 'Отчество обязательно к заполнению<br>';
    }
    if (mb_strlen ($_POST ['password']) < 8) {
    $err = 'Длина пароля должна быть минимум 8 символов '; 
    }
    if (!preg_match ('[^[a-zA-Z0-9]+$]' , $_POST ['login'])) {
    $err = 'Поле логин не должно содержать символы @/*?,;:. ';
    }
    if ($CodeWord !== $CodeWord2) {
      $err = 'Неверное кодовое слово';
    }
    if ($err == '') {
      echo 'Регистрация прошла успешно';
    }
echo $err; 
?>