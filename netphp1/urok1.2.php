
<?php
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

switch ($daycase) {
    case 'Sunday': $daycase = "Воскресенье"; break;
    case 'Monday': $daycase = "Понедельник"; break;
    case 'Tuesday': $daycase = "Вторник"; break;
    case 'Wednesday': $daycase = "Среда"; break;
    case 'Thursday': $daycase = "Четверг"; break;
    case 'Friday': $daycase = "Пятница"; break;
    case 'Sunday': $daycase = "Суббота"; break;
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
         echo $daycase ." $hourcase" . " часов! " . "<br/>"; echo $helloWord;
            ?>
        </p>
    </div>
</body>
</html>
