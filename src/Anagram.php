<?php
    class Anagram {


        function anagramCheck($inputString, $testWordArray) {
            // sort comparison string

            $inputString = strtolower($inputString);
            $inputString = str_split($inputString);
            sort($inputString);
            $inputString = implode($inputString);
            // sort words in comparison array, perform comparison
            $returnArray = array();
            foreach ($testWordArray as $word) {
                $wordToCheck = str_split(strtolower($word));
                sort($wordToCheck);
                $wordToCheck = implode($wordToCheck);
                if ($inputString == $wordToCheck)
                {
                    array_push($returnArray,$word);
                }
            }
            return $returnArray;
        }
    }
?>
