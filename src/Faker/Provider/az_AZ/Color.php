<?php

namespace Faker\Provider\az_AZ;

class Color extends \Faker\Provider\Color
{
    /**
     * @see https://az.wikipedia.org/wiki/R%C9%99ngl%C9%99r_siyah%C4%B1s%C4%B1
     */
    protected static $safeColorNames = [
        'qara', 'qırmızı', 'sarı', 'mavi', 'narıncı',
        'yaşıl', 'bənövşəyi', 'gümüş', 'boz', 'çəhrayı',
    ];
}
