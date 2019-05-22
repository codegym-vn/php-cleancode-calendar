<?php


class CalendarUtils
{
    public function getDaysOfMonth($m , $y)
    {
        switch ($m) {
            case 1:
            case 3:
            case 5:
            case 7:
            case 8:
            case 10:
            case 12:
                return 31;
            case 4:
            case 6:
            case 9:
            case 11:
                return 30;
            case 2:
                if ($y % 4 == 0) {
                    if ($y % 100 == 0) {
                        if ($y % 400 == 0) {
                            return 29;
                        }
                        return 28;
                    }
                    return 29;
                }
                return 28;
            default:
                throw new Exception("Invalid month");
        }
    }
}