<?php

    class Addition{

        private $result = 0;
        private $isNegetive;

        public function sumNumber($num){

            if($num < 0){
                $this->isNegetive = true;               
            }

            $num  = (string) abs($num);

            for($i = 0; $i < strlen($num); $i++){

                $this->result += $num[$i];

            }

            return $this->isNegetive ?  "-".$this->result : $this->result;
        }
    }


    $obj = new Addition();

    echo $obj->sumNumber(2356);