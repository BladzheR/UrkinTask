<?php
/**
 * @author: Sergey Kudryavtsev <bladzher@yandex.ru>
 * @since 16.09.14
 */

namespace Tests;

use Tasks\Task_1_9;

class Task_1_9Test extends \PHPUnit_Framework_TestCase {

    public function testFactorCubeEquation()
    {
        $e = new Task_1_9();

        $this->assertEquals([2, 3, 0], $e->factorCubeEquation(2, 4, 6));
    }

    public function testFactorCubeEquation1()
    {
        $e = new Task_1_9();

        $this->assertEquals([2, 3, 4], $e->factorCubeEquation(2, 4, 6,8));
    }

}
 