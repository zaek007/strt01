<?php
class grad
{
    public function cal($scr = 0)
    {
        if ($scr >= 80) {
            return 'A';
        } else if ($scr >= 75) {
            return 'B+';
        } else if ($scr >= 70) {
            return 'B';
        } else if ($scr >= 65) {
            return 'C+';
        } else if ($scr >= 60) {
            return 'C';
        } else {
            return 'F';
        }
    }
}

 // $grad = new grad;
 // echo $grad->cal(60);
 