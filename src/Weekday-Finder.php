<?php
date_default_timezone_set("America/Los_Angeles");

class WeekdayFinder
{
    private $user_input;

    function __construct($date)
    {
        $this->user_input = $date;
    }


    function weekdayFinder(){
        $date=date_create($this->user_input);
        $day_number = date_format($date,"w");
        $day_array = array(
            0 => "Sunday",
            1 => "Monday",
            2 => "Tuesday",
            3 => "Wednesday",
            4 => "Thursday",
            5 => "Friday",
            6 => "Saturday"
        );
        $day = $day_array[$day_number];
        echo date("Y-m-d g:ia e");
        return $day;

    }

}
