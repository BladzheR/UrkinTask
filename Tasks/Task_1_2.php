<?php
/**
 * @author: Sergey Kudryavtsev <bladzher@yandex.ru>
 * @since 15.08.14
 */

namespace Tasks;


class Task_1_2 {

    public function translationRadianDegrees($radian)
    {
        if($radian == 0)
        {
            return [0, 0, 0];
        }elseif($radian < 0)
        {
            $seconds = (round(180*60*60*$radian/Pi()));

            $degrees = (floor($seconds / 3600)) * (-1);

            $minutes = floor(($seconds - $degrees * 3600)/60) * (-1);

            $seconds1 = $seconds - 3600 * $degrees - 60 * $minutes * (-1);

            return [$degrees, $minutes, $seconds1];
        }
        $seconds = round(180*60*60*$radian/Pi());

        $degrees = floor($seconds / 3600);

        $minutes = floor(($seconds - $degrees * 3600)/60);

        $seconds1 = $seconds - 3600 * $degrees - 60 * $minutes;

       return [$degrees, $minutes, $seconds1];
    }

} 