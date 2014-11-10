<?php
/**
 * @author: Sergey Kudryavtsev <bladzher@yandex.ru>
 * @since 14.08.14
 */

namespace Tests;


use Tasks\Task_1_1;

class Task_1_1Test extends \PHPUnit_Framework_TestCase {

    public function testTranslationDegreesRadian()
    {
        $e = new Task_1_1();

        $this->assertEquals(Pi()/4, $e->translationDegreesRadian(45, 0, 0));

    }

    public function testTranslationDegreesAndMinutesRadian()
    {
        $e = new Task_1_1();

        $this->assertEquals(0.7863, round($e->translationDegreesRadian(45, 3, 0), 4));

    }

    public function testTranslationDegreesAndMinutesAndSecondsRadian()
    {
        $e = new Task_1_1();

        $this->assertEquals(0.7875, round($e->translationDegreesRadian(45, 7, 5), 4));

    }

    public function testNegativeDegree()
    {
        $e = new Task_1_1();

        $this->assertEquals(-0.7877, round($e->translationDegreesRadian(-45, 8, 2), 4));

    }

    /**
     * @expectedException Exception
     */
    public function testNegativeDegreeExceptionMinutes()
    {
        $e = new Task_1_1();

        $this->assertEquals(-0.7877, round($e->translationDegreesRadian(-45, -8, 2), 4));

    }

    /**
     * @expectedException Exception
     */
    public function testNegativeDegreeExceptionSeconds()
    {
        $e = new Task_1_1();

        $this->assertEquals(-0.7877, round($e->translationDegreesRadian(-45, 8, -2), 4));

    }

    public function testMoreExpanded()
    {
        $e = new Task_1_1();

        $this->assertEquals(4.1888, round($e->translationDegreesRadian(240, 0, 0), 4));

    }

    public function testTranslationZeroDegreesRadian()
    {
        $e = new Task_1_1();

        $this->assertEquals(0, $e->translationDegreesRadian(0, 0, 0));

    }
}
