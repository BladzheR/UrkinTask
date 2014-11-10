<?php
/**
 * @author: Sergey Kudryavtsev <bladzher@yandex.ru>
 * @since 15.08.14
 */

namespace Tests;


use Tasks\Task_1_2;

class Task_1_2Test extends \PHPUnit_Framework_TestCase {

    public function testTranslationRadianDegrees()
    {
        $e = new Task_1_2();

        $this->assertEquals([179, 54, 31], $e->translationRadianDegrees(3.14));

    }

    public function testTranslationZeroRadianDegrees()
    {
        $e = new Task_1_2();

        $this->assertEquals([0, 0, 0], $e->translationRadianDegrees(0));

    }

    public function testTranslationNegativeRadianDegrees()
    {
        $e = new Task_1_2();

        $this->assertEquals([-24, 50, 42], $e->translationRadianDegrees(-13));

    }
}
 