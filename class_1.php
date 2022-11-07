
<?php

//Blueprint
 class car{
    public $speed = 10;
    public $position = 100;
    public $color;
    public $wheelType = '4 wheeler';

    //constructor
    function __construct($color){
      $this->color=$color;
    }

    function move(){
      echo"<br>";
      echo"i am moving, in the speed of $this->speed";
    }
 }

 $car = new car('red');
 $car2 = new car('yellow');
 $car2->speed = 60;
 $car2->position = 200;
 echo $car->position;
 echo'<br>';
 echo $car2->position;
 echo'<br>';
 echo $car->move();
 echo'<br>';
 echo $car2->move();
 ?>