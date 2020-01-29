<?php
    function todaysDate(){
        echo("Today's date is ". date('M-d-Y'));
    }

    function yearsToGo($age)
    {
        $remainingYears = 18 - $age;
        echo("$remainingYears years more to qualify!\n");
    }

    function diffInScore($score)
    {
        $minScore = 680;
        return $minScore - $score;
    }