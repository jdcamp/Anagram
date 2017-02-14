<?php

    require_once "src/Anagram.php";
    class AnagramTest extends PHPUnit_Framework_TestCase
    {
       function test_Anagram()
       {
           // Arrange
           $test_anagram = new Anagram();
           $input_string = "Bread";
           $input_array = array("Beard","Broad","Butter");
           //Act
           $result = $test_anagram->anagramCheck($input_string,$input_array);
           //assert
           $this->assertEquals(array("Beard"),$result);
       }


    }

?>
