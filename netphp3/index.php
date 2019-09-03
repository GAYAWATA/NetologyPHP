<?php 

$rows = 10;     //ряды
$chairs = 10;   //кресел в ряду
$place = 10;    //Посадочные места, люди

/*
 * Функции генерации карты посадочных мест принимает количество рядов и мест в ряду, 
 * а так же количество доступных кресел.
 */
function landingPlace(int $rows, int $chairs, int $place)
{
    if ($place < $rows * $chairs) {
        
        for ($i=0;$i<=$rows;$i++){

            for ($y=0;$y<=$place;$y++){

                $array[$i][$y] = false;
            }
   
        }   
           return $array;  
    }
    else {
    
        return false;
    }
       
}

$map = landingPlace($rows, $chairs, $place);

var_dump($map);

?>