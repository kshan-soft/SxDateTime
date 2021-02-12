<?php

namespace SteedX;

/**
* SxDateInterval
* @package : sxDateTime
*
*/

use DateInterval;

class SxDateInterval
{
    /**
     * @var object : Hold object of type DateInterval
     */
    private $dateInterval;

    /**
     * @var array: Array hold working days details including Sat and Sun
     */
    private $workingDays=[];

    public function __construct($interval)
    {
        $this->dateInterval = $interval;
    }

    /**
     * Set working days
     *
     * @param $d array
     */
    public function setWorkingDays($d)
    {
        $this->workingDays = $d;
    }


    /**
     * Return difference in Years
     *
     * @return mixed
     */
    public function toYears()
    {
        return $this->dateInterval->format('%Y');
    }

    /**
     * Get Month part from Interval
     *
     * @return mixed
     */
    public function getMonth()
    {
        return $this->dateInterval->format('%m');
    }

    /**
     * Get Day part from Interval
     *
     * @return mixed
     */
    public function getDay()
    {
        return $this->dateInterval->format('%d');
    }

    /**
     * Get hour part from Interval
     *
     * @return mixed
     */
    public function getHour()
    {
        return $this->dateInterval->format('%h');
    }

    /**
     * Get minute part from Interval
     *
     * @return mixed
     */
    public function getMinute()
    {
        return $this->dateInterval->format('%i');
    }

    /**
     * Get Seconds part from Interval
     *
     * @return mixed
     */
    public function getSecond()
    {
        return $this->dateInterval->format('%s');
    }

    /**
     *  Return the  difference in sign
     *
     * @return mixed
     */
    public function getSign()
    {
        return $this->dateInterval->format('%r');
    }

    /**
     * Get number of sundays between dates
     *
     * @return mixed
     */
    public function getSundays()
    {
        return isset($this->workingDays['sunday'])?$this->workingDays['sunday']:0;
    }

    /**
     * Get number of Saturdays between days
     *
     * @return mixed
     */
    public function getSaturdays()
    {
        return isset($this->workingDays['saturday'])?$this->workingDays['saturday']:0;
    }

    /**
     * Get working days between days
     *
     * @return int|mixed
     */
    public function getWorkingDays()
    {
        return isset($this->workingDays['workday'])?$this->workingDays['workday']:0;
    }

    /**
     * get Weekends between dates
     *
     * @return float|int
     */
    public function getWeekends()
    {
        $a = $this->getSundays() + $this->getSaturdays();
        return $a / 2;
    }

    /**
     * Return difference in Human readable format
     *
     * @return string
     */
    public function toHuman()
    {
        $doPlural = function ($nb, $str) {
            return $nb > 1 ? ' ' . $str . 's ' : ' ' . $str . ' ';
        };

        return $this->toYears() . $doPlural($this->toYears(), 'Year').
                $this->getMonth() . $doPlural($this->getMonth(), 'Month').
                $this->getDay() . $doPlural($this->getDay(), 'Day').
                $this->getHour() . $doPlural($this->getHour(), 'Hour').
                $this->getMinute() . $doPlural($this->getMinute(), 'Minute').
                $this->getSecond() . $doPlural($this->getSecond(), 'Second')
                ;
    }


    /**
     * Return difference in months
     *
     * @return mixed
     */
    public function toMonths()
    {
        return ($this->toYears() * 12) + $this->getMonth();
    }

    /**
     * Return difference in Days
     *
     * @return mixed
     */
    public function toDays()
    {
        return $this->dateInterval->days;
    }

    /**
     * Return difference in Hours
     *
     * @return mixed
     */
    public function toHours()
    {
        return ($this->dateInterval->days * 24 )+ $this->getHour() ;
    }

    /**
     * Return difference in Minutes
     *
     * @return mixed
     */
    public function toMinutes()
    {
        return($this->dateInterval->days * 1440 )+ ($this->getMinute() + $this->getHour() * 60);
    }

    /**
     * Return difference in Seconds
     *
     * @return mixed
     */
    public function toSeconds()
    {
        return ($this->toMinutes() * 60 ) + $this->getSecond() ;
    }
}
