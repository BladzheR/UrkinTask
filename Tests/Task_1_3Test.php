<?php
/**
 * @author: Sergey Kudryavtsev <bladzher@yandex.ru>
 * @since 15.08.14
 */

namespace Tests;


use Tasks\Task_1_3;

class Task_1_3Test extends \PHPUnit_Framework_TestCase {

    public function testTranslationInchMeter0()
    {
        $e = new Task_1_3();

        $this->assertEquals([0, 53, 3.4], $e->testTranslationInchMeter(21));
    }

    public function testTranslationInchMeter1()
    {
        $e = new Task_1_3();

        $this->assertEquals([1, 1, 6], $e->testTranslationInchMeter(40));
    }

    public function testTranslationInchMeter2()
    {
        $e = new Task_1_3();

        $this->assertEquals([1, 1, 3.8], $e->testTranslationInchMeter(47));
    }

    public function testTranslationInchMeter3()
    {
        $e = new Task_1_3();

        $this->assertEquals([0, 2, 5.4], $e->testTranslationInchMeter(1));
    }

    public function testTranslationNegativeInchMeter()
    {
        $e = new Task_1_3();

        $this->assertEquals([0, -2, 5.4], $e->testTranslationInchMeter(-1));
    }

    public function testTranslationZeroInchMeter()
    {
        $e = new Task_1_3();

        $this->assertEquals([0, 0, 0], $e->testTranslationInchMeter(0));
    }


}
 