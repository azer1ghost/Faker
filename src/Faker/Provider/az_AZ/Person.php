<?php

namespace Faker\Provider\az_AZ;

class Person extends \Faker\Provider\Person
{
    /**
     * @var array Azerbaijani person name formats.
     */
    protected static $maleNameFormats = [
        '{{firstNameMale}} {{lastName}}li',
        '{{firstNameMale}} {{lastName}}ov',
        '{{firstNameMale}} {{lastName}}zadə',
        '{{firstNameMale}} {{lastName}}bəyov',
        '{{firstNameMale}} {{lastName}}yarov',
        '{{firstNameMale}} {{firstNameMale}}oğlu',
    ];

    protected static $femaleNameFormats = [
        '{{firstNameFemale}} {{lastName}}li',
        '{{firstNameFemale}} {{lastName}}ova',
        '{{firstNameFemale}} {{lastName}}zadə',
        '{{firstNameFemale}} {{lastName}}bəyova',
        '{{firstNameFemale}} {{lastName}}yarova',
        '{{lastName}} {{firstNameMale}}qızı',
    ];

    /**
     * @see https://exidmet.justice.gov.az:8284/VVA/Names
     *
     * @var array Azerbaijani first names.
     */
    protected static $firstNameMale = [
        'Abbas', 'Adəm', 'Adil', 'Ayxan', 'Azər', 'Babək', 'Bayraqdar', 'Bayram', 'Cabbar', 'Cabir', 'Cahangir',
        'Cahid', 'Cəfər', 'Cəlal', 'Cəlil', 'Elman', 'Elmin', 'Emil', 'Əhməd', 'Əziz', 'Fərid', 'Həsən',
        'Ibrahim', 'Ilham', 'Ilqar', 'Islam', 'Kamal', 'Kənan', 'Məhəmməd', 'Məmməd', 'Murad', 'Nadir',
        'Nahid', 'Rasim', 'Rauf', 'Rəsul', 'Tural', 'Ümid', 'Vasif', 'Zaur', 'Ziya',
    ];

    /**
     * @see https://exidmet.justice.gov.az:8284/VVA/Names
     *
     * @var array Azerbaijani first names.
     */
    protected static $firstNameFemale = [
        'Ayan', 'Ayla', 'Banu', 'Cahan', 'Dilarə', 'Fidan', 'Gülay', 'Günay', 'Günel', 'İnci̇', 'Leyla', 'Natəvan',
        'Nazlı', 'Nəzrin', 'Nigar', 'Nilay', 'Nuray', 'Samirə', 'Səma', 'Vəfa',
    ];

    /**
     * @see https://exidmet.justice.gov.az:8284/VVA/Names
     *
     * @var array Azerbaijani last names.
     */
    protected static $lastName = [
        'Məmməd', 'Abbas', 'Cəlil', 'Qulu', 'Cəfər', 'Ibrahim', 'Murad',
    ];

    protected static array $title = ['Doç. Dr.', 'Dr.', 'Prof. Dr.'];

    public function title($gender = null)
    {
        return static::titleMale();
    }

    /**
     * replaced by specific unisex Turkish title
     */
    public static function titleMale()
    {
        return static::randomElement(static::$title);
    }

    /**
     * replaced by specific unisex Turkish title
     */
    public static function titleFemale()
    {
        return static::titleMale();
    }

    /**
     * National Personal Identity Number (Ferdi indentifikasiya nömrəsi)
     *
     * @see https://www.e-gov.az/ru/news/read/422
     * FIN consists of exactly 7 characters
     * that are all uppercase English letters except "I" and "O" and digits from 0 to 9.
     */
    public function fin(): string
    {
        $characters = 'ABCDEFGHJKLMNPQRSTUVWXYZ0123456789';
        $fin = '';

        for ($i = 0; $i < 7; ++$i) {
            $fin .= $characters[mt_rand(0, strlen($characters) - 1)];
        }

        return $fin;
    }

    /**
     * National Personal Identity Number (Ferdi indentifikasiya nömrəsi)
     *
     * @see https://www.e-gov.az/ru/news/read/422
     * FIN consists of exactly 7 characters
     * that are all uppercase English letters except "I" and "O" and digits from 0 to 9.
     */
    public function finIsValid($fin): bool
    {
        return preg_match('/^[A-HJ-NP-Z0-9]{7}$/u', $fin);
    }
}
