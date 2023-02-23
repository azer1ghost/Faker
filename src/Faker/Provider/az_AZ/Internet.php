<?php

namespace Faker\Provider\az_AZ;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = ['gmail.com', 'hotmail.com', 'yahoo.com', 'yandex.az', 'mail.ru'];
    protected static $tld = ['com', 'com.az', 'info', 'az', 'net', 'org', 'org.az', 'edu', 'edu.az'];
}
