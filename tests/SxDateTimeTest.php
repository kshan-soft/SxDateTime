<?php

use PHPUnit\Framework\TestCase;

@include_once(__DIR__.'/../src/SteedX/SxDateTime.php');
use SteedX\SxDateTime;

class SxDateTimeTest extends TestCase
{
    public function testMyAge()
    {
        $difference = $this->getMyAge();
        $this->assertEquals(45, $difference->toYears());
        $this->assertEquals(7, $difference->getMonth());
    }

    public function testMyAgeMonths()
    {
        $difference = $this->getMyAge();
        $this->assertEquals(547, $difference->toMonths());
    }
    public function testMyAgeHours()
    {
        $difference = $this->getMyAge();
        $this->assertEquals(399600, $difference->toHours());
    }
    public function testMyAgeMinutes()
    {
        $difference = $this->getMyAge();
        $this->assertEquals(23976000, $difference->toMinutes());
    }
    public function testMyAgeSeconds()
    {
        $difference = $this->getMyAge();
        $this->assertEquals(1438560000, $difference->toSeconds());
    }

    public function testDifferentTimeZone()
    {
        $istText = '2019/11/24 21:30:10';
        $ist = new SxDateTime($istText, 'Asia/Calcutta');
        $difference = $ist->difference($istText, 'Australia/Adelaide');
        $this->assertEquals(5, $difference->toHours());
    }

    public function testFeb2019()
    {
        $startDate = '2019-02-01';
        $date = new SxDateTime($startDate);
        $difference = $date->difference('2019-03-01');
        $this->assertEquals(28, $difference->toDays());
        $this->assertEquals(672, $difference->toHours());
    }

    /**
     * Test Source
     *https://www.timeanddate.com/date/durationresult.html?d1=1&m1=2&y1=2019&d2=1&m2=3&y2=2019&h1=8&i1=25&s1=10&h2=17&i2=30&s2=42
     */
    public function testFeb2019WithTime()
    {
        $startDate = '2019-02-01 8:25:10';
        $date = new SxDateTime($startDate);
        $difference = $date->difference('2019-03-01 17:30:42');
        $this->assertEquals(28, $difference->toDays());
        $this->assertEquals(9, $difference->getHour());
        $this->assertEquals(681, $difference->toHours());
        $this->assertEquals(40865, $difference->toMinutes());
        $this->assertEquals(2451932, $difference->toSeconds());
    }

    public function testRandom()
    {
        $startDate = '2019-02-01 19:25:10';
        $date = new SxDateTime($startDate);
        $difference = $date->difference('2019-08-01 17:30:42');
        $this->assertEquals(4342, $difference->toHours());
    }

    private function getMyAge()
    {
        $dob = new SxDateTime('19730601033009', 'Asia/Calcutta');
        return $dob->difference('20190101033009', 'Asia/Calcutta');
    }
}
