<?php

namespace Koff\Transliterator\Mapping\Lang\BE;

use Koff\Transliterator\Mapping\MappingInterface;

class Standard implements MappingInterface
{
    public function getCharMapping(): array
    {
        return [
            'Ё' => 'Ë',
            'І' => 'I',
            'Ў' => 'Ŭ',
            'А' => 'A',
            'Б' => 'B',
            'В' => 'V',
            'Г' => 'H',
            'Д' => 'D',
            'Дж' => 'Dž',
            'Дз' => 'Dz',
            'Е' => 'E',
            'Ж' => 'Ž',
            'З' => 'Z',
            'Й' => 'J',
            'К' => 'K',
            'Л' => 'L',
            'М' => 'M',
            'Н' => 'N',
            'О' => 'O',
            'П' => 'P',
            'Р' => 'R',
            'С' => 'S',
            'Т' => 'T',
            'У' => 'U',
            'Ф' => 'F',
            'Х' => 'X',
            'Ц' => 'C',
            'Ч' => 'Č',
            'Ш' => 'Š',
            'Ы' => 'Y',
            'Ь' => '′',
            'Э' => 'È',
            'Ю' => 'Ju',
            'Я' => 'Ja',
            'а' => 'a',
            'б' => 'b',
            'в' => 'v',
            'г' => 'h',
            'д' => 'd',
            'дж' => 'dž',
            'дз' => 'dz',
            'е' => 'e',
            'ж' => 'ž',
            'з' => 'z',
            'й' => 'j',
            'к' => 'k',
            'л' => 'l',
            'м' => 'm',
            'н' => 'n',
            'о' => 'o',
            'п' => 'p',
            'р' => 'r',
            'с' => 's',
            'т' => 't',
            'у' => 'u',
            'ф' => 'f',
            'х' => 'x',
            'ц' => 'c',
            'ч' => 'č',
            'ш' => 'š',
            'ы' => 'y',
            'ь' => '′',
            'э' => 'è',
            'ю' => 'ju',
            'я' => 'ja',
            'ё' => 'ë',
            'і' => 'i',
            'ў' => 'ŭ',
            'Ґ' => 'G',
            'ґ' => 'g'
        ];
    }
}