<?php
/**
 * @author: Sergey Kudryavtsev <bladzher@yandex.ru>
 * @since 27.08.14
 */

namespace Tests;


use Tasks\Task_1_6;

class Task_1_6Test extends \PHPUnit_Framework_TestCase {

    public function testHowYears()
    {
        $e = new Task_1_6();

        $this->assertEquals(9, $e->HowYears(10000, 10, 100000));
    }

    /**
     * @expectedException Exception
     */
    public function testNegativeHowYears()
    {
        $e = new Task_1_6();

        $this->assertEquals(9, $e->HowYears(10000, -10, 100000));
    }
}
 