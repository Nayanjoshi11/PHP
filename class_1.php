
<?php

//Blueprnt
 class car{
    public $speed = 10;
    public $position = 100;
    public $color = 'red';
    public $wheelType = '4 wheeler';
 }

 $car = new car;
 $car2 = new car;
 $car2->position = 200;
 echo $car->position;
 echo'<br>';
 echo $car2->position;
 ?>