<?php

use OpenCafe\Datium as Datium;

class DayOfTest extends PHPUnit_Framework_TestCase
{

    public function testDayOfYear()
    {

        $this->assertEquals(1, Datium::create(2015, 1, 1)->dayOf()->year());

        // 1436-03-10 - 68th day
        $this->assertEquals(68, Datium::create(2015, 1, 1)->to('hijri')->dayOf()->year());

        // 1393-10-11 - 287th day
        $this->assertEquals(287, Datium::create(2015, 1, 1)->to('jalali')->dayOf()->year());

    }

    public function testDayOfWeek()
    {

        // First january of 2015 is Thursday
        $this->assertEquals(4, Datium::create(2015, 1, 1)->dayOf()->week());

        $this->assertEquals(3, Datium::create(2015, 1, 1)->to('hijri')->dayOf()->week());

        $this->assertEquals(6, Datium::create(2015, 1, 1)->to('jalali')->dayOf()->week());

    }
}
