<?php

    class MyClass{
        public $x,$y,$z;   //properties

        //method
        public function mysum(){
            $this->z = $this->x + $this->y;
            return $this->z;
        }

        public function __construct($a,$b){
            $this->x = $a;
            $this->y = $b;

        }
    }


    //object

    $asib = new MyClass(1000,700);
    


    


   

    echo $asib->mysum();
    echo "<br>";
    $asib = new MyClass(1000,300);

    echo $asib->mysum();




?>