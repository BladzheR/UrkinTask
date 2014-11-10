<?php
/**
 * @author: Sergey Kudryavtsev <bladzher@yandex.ru>
 * @since 27.08.14
 */

namespace Tasks;


class Task_1_6 {

    public function HowYears($capital,$interest,$sum)
    {
        if($interest <= 0 || $capital <=0 || $sum <= 0)
        {
            throw new \Exception("<= 0");
        }else{
        return ceil($sum / (($capital * ($interest/100))*12));
        }
    }
}