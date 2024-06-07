<?php

    class Word{

        public function wordCount($text){

            echo "Output is = ".count( explode(" ",$text));

        }


    }

    $file =  file_get_contents("file.txt");
    $obj = new Word();

    $obj->wordCount($file);
   