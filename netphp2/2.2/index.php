<?php
if (isset($_POST['go'])) {
    echo 'Форма отправлена<br>';   
if (isset ($_POST['firstName'])) $FirstName = $_POST['firstName'];
else $FirstName = '';
if (isset ($_POST['lastName'])) $LastName = $_POST['lastName'];
else $LastName = '';
if (isset ($_POST['middleName'])) $MiddleName = $_POST['middleName'];
else $MiddleName = '';
if (isset ($_POST['code'])) $CodeWord2 = $_POST['code'];
}

 $fullName = ucfirst(mb_substr($FirstName, 0, 1)) . mb_substr($FirstName, 1,3) . " " . ucfirst(mb_substr($LastName, 0, 1)) . (mb_substr($LastName, 1, 5)) . " " . ucfirst(mb_substr($MiddleName, 0,1)) . (mb_substr($MiddleName, 1,7));
 $fio = substr_replace($FirstName,' ',1) . substr_replace($LastName,' ',1) . substr_replace($MiddleName,' ',1);
 $surnameAndInitials = mb_substr( $LastName, 0,1) . mb_substr( $LastName, 1,5) . " " . ucfirst(substr_replace($FirstName,' ',1)) . " " . ucfirst(substr_replace($MiddleName,' ',1));
 ?>

 <html>
     <p> Полное имя: <?php echo $fullName ?></p>
     <p>Аббревиатура: ' <?php echo strtoupper($fio)?> '</p>
     <p>Фамилия и инициалы: <?php echo ucfirst($surnameAndInitials) ?></p>
 </html>