<?php
/**
 * @author: Sergey Kudryavtsev <bladzher@yandex.ru>
 * @since 14.08.14
 */

namespace Tasks;


class Task_1_1 {

    public function translationDegreesRadian($degrees, $minutes, $seconds)
    {
        if($degrees == 0 && $minutes == 0 && $seconds == 0)
        {
            return 0;
        }elseif($minutes < 0 || $seconds < 0){
            throw new \Exception("minutes < 0 || seconds < 0");
        }
        elseif($degrees < 0){
            $minutes*=-1;
            $seconds*=-1;
        }
        return Pi()/180 * $degrees + Pi()/(180*60) * $minutes + Pi()/(180*60*60) * $seconds;

    }
}