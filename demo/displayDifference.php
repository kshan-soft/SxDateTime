<?php
function displayDifference($sxInterval)
{
    echo " -- Years = " . $sxInterval->toYears()."\n";
    echo " -- Months = " . $sxInterval->getMonth()."\n";
    echo " -- Days = " . $sxInterval->getDay()."\n";
    echo " -- Hours = " . $sxInterval->getHour()."\n";
    echo " -- Minutes = " . $sxInterval->getMinute()."\n";
    echo " -- Seconds = " . $sxInterval->getSecond()."\n";
    echo " -- Sign = ". $sxInterval->getSign()."\n";
    echo " -- Human = ". $sxInterval->toHuman()."\n";
    echo "Difference in Months / Days / etc. *Please note it will return full unit of measurement \n";
    echo " -- Months = " . $sxInterval->toMonths()."\n";
    echo " -- Days = " . $sxInterval->toDays()."\n";
    echo " -- Hours = " . $sxInterval->toHours()."\n";
    echo " -- Minutes = " . $sxInterval->toMinutes()."\n";
    echo " -- Seconds = " . $sxInterval->toSeconds()."\n";

    echo " -- Number of Working Days = ". $sxInterval->getWorkingDays()."\n";

    echo "----------------------\n";
}
