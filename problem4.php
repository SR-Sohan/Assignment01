<?php 

    class Star{

        public function printStar($n){
            for($i = 1; $i <= $n; $i++){

              for($j = $n; $j > $i; $j--){
                echo " ";
              }

              for($k = 1; $k <= 2 * $i - 1;$k++){
                echo "*";
              }

              echo "\n";
              
            }
        }
    }


    $obj = new Star();

    $obj->printStar(8);

