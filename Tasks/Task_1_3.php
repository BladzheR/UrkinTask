<?php
/**
 * @author: Sergey Kudryavtsev <bladzher@yandex.ru>
 * @since 15.08.14
 */

namespace Tasks;


class Task_1_3 {

    public function testTranslationInchMeter($inch)
    {
        if($inch == 0)
        {
            return [0, 0, 0];
        }
        $centimeter = $inch * 2.54;
        $meter = $centimeter / 100;
        $millimeter = ($centimeter - floor($centimeter)) * 10;
        if(floor($meter) > 0)
        {
            $centimeter/=100;
        }
        return [floor($meter), floor($centimeter), $millimeter];
    }
} 