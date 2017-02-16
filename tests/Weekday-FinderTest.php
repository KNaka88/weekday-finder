<?php

    require_once "src/Weekday-Finder.php";

    class WeekdayFinder_test extends PHPUnit_Framework_TestCase
    {

        function test_weekdayFinder_()
        {
            //Arrange
            $user_input = "2/16/17";
            $test_weekdayFinder = new WeekdayFinder($user_input);


            //Act
            $result = $test_weekdayFinder->weekdayFinder();

            //Assert
            $this->assertEquals('Thursday', $result);

        }



    }
