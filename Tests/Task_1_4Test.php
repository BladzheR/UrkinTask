<?php
/**
 * @author: Sergey Kudryavtsev <bladzher@yandex.ru>
 * @since 16.08.14
 */

namespace Tests;


use Tasks\Task_1_4;

class Task_1_4Test extends \PHPUnit_Framework_TestCase {

    public function testSearchPeriod0()
    {
     $e = new Task_1_4();

     $this->assertEquals([2 ,6 , 2], $e->searchPeriod(5, 3, 1, 7, 9, 3));
    }

    public function testSearchPeriod1()
    {
        $e = new Task_1_4();

        $this->assertEquals([0 ,0 , 2], $e->searchPeriod(5, 3, 1, 5, 3, 3));
    }

    /**
     * @expectedException Exception
     */
    public function testZeroSearchPeriod()
    {
        $e = new Task_1_4();

        $this->assertEquals([0, 0, 0], $e->searchPeriod(0, 0, 0, 0, 0, 0));
    }

    /**
     * @expectedException Exception
     */
    public function testSearchPeriodMore24()
    {
        $e = new Task_1_4();

        $this->assertEquals([0, 0, 0], $e->searchPeriod(25, 0, 0, 0, 0, 0));
    }

    /**
     * @expectedException Exception
     */
    public function testSearchPeriodStartMoreEnd()
    {
        $e = new Task_1_4();

        $this->assertEquals([0, 0, 0], $e->searchPeriod(3, 6, 5, 1, 3, 2));
    }
}
 