<?php
/**
 * @author: Sergey Kudryavtsev <bladzher@yandex.ru>
 * @since 16.09.14
 */

namespace Tasks;


class Task_1_9 {

    public function factorCubeEquation($a,$b,$c,$d=0)
    {
        return [$b/$a, $c/$a, $d/$a];
    }

} 