<?php
    $today = $_GET["date"]

    
    $today = strtotime($today)
    // https://thisinterestsme.com/php-days-until-christmas/
    //The unix timestamp of Christmas Day.
    $christmasDay = strtotime(date("Y") . "-12-25");

    //Have we already passed this year's Christmas Day?
    if(date("m") == 12 && date("d") > 25){
        //Use the timestamp for next year's Christmas Day.
        $christmasDay = strtotime((date("Y") + 1) . "-12-25");
    }

    //Get the number of seconds that will pass between now and the next Christmas day.
    $differenceInSeconds = $christmasDay - $today;

    //Convert those seconds into days by dividing the number by 86400.
    $days = floor($differenceInSeconds / (60 * 60 * 24));

    //Print it out.
    echo $days . ' days will pass between now and next Christmas!';
?>