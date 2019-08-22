<?php
 $hourcaseWork = date ('H');
 $hourcase = date ('H');
 $daycase = date('l');
if ($hourcase < 6) {
     $helloWord = 'Доброй ночи!';
     $linkPicture = 'img1/night.jpg';
} elseif ($hourcase < 11) {
     $helloWord = 'Доброе утро!';
     $linkPicture = 'img1/utro.jpg';
} elseif ($hourcase < 18) {
     $helloWord = 'Добрый день!';
     $linkPicture = 'img1/day.jpg';
} elseif ($hourcase < 23) { 
     $helloWord = 'Добрый вечер!';
     $linkPicture = 'img1/afternoon.jpg';
} else {
     $helloWord = 'Доброй ночи!';
     $linkPicture = 'img1/night.jpg';
};

if (($hourcaseWork == 9 and $hourcaseWork <= 18) and ($daycase == 'Monday' || $daycase == 'Tuesday')) {
	$helloWork = 'Это лучший день, чтобы обратиться в Horns&Hooves! Мы работаем для Вас до 18:00';
} else {
	$helloWork = 'Завтра лучший день, чтобы обратиться в Horns&Hooves! Мы работаем для Вас с 09:00';
}
if (($hourcaseWork == 9 and $hourcaseWork <= 18) and ($daycase == 'Wednesday')) {
	$helloWork = 'Это лучший день, чтобы обратиться к нам! Мы работаем для Вас до 18:00';
} else {
	$helloWork = 'Завтра лучший день, чтобы обратиться в Horns&Hooves! Мы работаем для Вас с 10:00';
}
if (($hourcaseWork == 10 and $hourcaseWork <= 18) and ($daycase == 'Thursday' || $daycase == 'Friday')) {
	$helloWork = 'Это лучший день, чтобы обратиться к нам! Мы работаем для Вас до 18:00';
} else {
	$helloWork = 'Завтра лучший день, чтобы обратиться в Horns&Hooves! Мы работаем для Вас с 10:00';
}
if (($hourcaseWork == 10 and $hourcaseWork <= 18) and ($daycase == 'Saturday')) {
	$helloWork = 'Это лучший день, чтобы обратиться к нам! Мы работаем для Вас до 18:00';
} else {
    $hourcaseWork = 'Послезавтра лучший день, чтобы обратиться в Horns&Hooves! Мы работаем для Вас с 10:00';
}
if ($daycase == 'Sunday') {
	$helloWork = 'Завтра лучший день, чтобы обратиться в Horns&Hooves! Мы работаем для Вас с 09:00';
};
switch ($daycase) {
    case 'Sunday': $daycase = "Воскресенье"; break;
    case 'Monday': $daycase = "Понедельник"; break;
    case 'Tuesday': $daycase = "Вторник"; break;
    case 'Wednesday': $daycase = "Среда"; break;
    case 'Thursday': $daycase = "Четверг"; break;
    case 'Friday': $daycase = "Пятница"; break;
    case 'Saturday': $daycase = "Суббота"; break;
    default: echo "Ошибка"; break;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bPHP - 1.1.2</title>
    <style>
      body {
        background-image: url(<?php echo $linkPicture ?>);
        background-repeat: no-repeat;
        background-size: 100%;
        text-align: center;
      }

      div {
        color: #2E8B57;
        text-align: center;
        border: 2px solid gray;   
        border-radius: 10px;    
        background-color: #fff;
        margin: 25% auto;
        width: 25%;
      } 
    </style>
    <!-- подключение стилевого файла -->
</head>
<body>
    <!-- Ваша html-вёрстка, частично задаваемая с помощью PHP -->
    <div>
        <p>Здравствуйте, сегодня
             <?php
         echo $daycase ." $hourcase" . " часов! " . "<br/>"; echo $helloWord ."<br/>"."<br/>";
         echo $helloWork;
            ?>
        </p>
    </div>
</body>
</html>
