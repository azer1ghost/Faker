<?php

namespace Faker\Provider\az_AZ;

class DateTime extends \Faker\Provider\DateTime
{
    public static function dayOfWeek($max = 'now')
    {
        $map = [
            'Sunday' => 'Bazar',
            'Monday' => 'Bazar ertəsi',
            'Tuesday' => 'Çərşənbə axşamı',
            'Wednesday' => 'Çərşənbə',
            'Thursday' => 'Cümə Axşamı',
            'Friday' => 'Cümə',
            'Saturday' => 'Şənbə',
        ];
        $week = static::dateTime($max)->format('l');

        return $map[$week] ?? $week;
    }

    public static function monthName($max = 'now')
    {
        $map = [
            'January' => 'Yanvar',
            'February' => 'Fevral',
            'March' => 'Mart',
            'April' => 'Aprel',
            'May' => 'May',
            'June' => 'İyun',
            'July' => 'İyul',
            'August' => 'Avqust',
            'September' => 'Setnyabr',
            'October' => 'Oktyabr',
            'November' => 'Noyabr',
            'December' => 'Dekabr',
        ];
        $month = static::dateTime($max)->format('F');

        return $map[$month] ?? $month;
    }
}
