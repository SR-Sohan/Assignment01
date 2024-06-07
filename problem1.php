<?php

    // Problem 1 find the minimum of their absolute values


    class MinimumNumber{

        private $minNumber;

        public function findMinNumber($num){

            // If user give emty data
            if(count($num) === 0){
                return "Number is empty";
            }

            // Set first array item minimum number in variable
            $this->minNumber = abs($num[0]);

            for($i = 1; $i < count($num); $i++){

                $absNum = abs($num[$i]);

                if($this->minNumber > $absNum){
                    $this->minNumber = $absNum;
                }

            }

            return $this->minNumber;

        }

    }


    $obj = new MinimumNumber();

   echo  $obj->findMinNumber([33,-5,8]);