<?php

    class StringReverse{

        private $result;

        public function reverse($string){           

            $stringArray = explode(" ",$string);

            foreach ($stringArray as $word) {

                $reversedWord = strrev($word); 
                $this->result .= $reversedWord . " ";

            }

            return $this->result;
       
            
        }

    }

    $obj = new StringReverse();

    echo $obj->reverse("I am Sohanur Rahman");