<?php

namespace Koff\Transliterator\Mapping\Lang\UA;

use Koff\Transliterator\Mapping\MappingInterface;

/**
 * @author Vladimir Sadicov <sadikoff@gmail.com>
 *
 * @internal
 */
class Derzhstandart_1995 implements MappingInterface
{
    public function getCharMapping(): array
    {
        return [
            'Є' => 'Je',
            'І' => 'I',
            'Ї' => 'Ji',
            'А' => 'A',
            'Б' => 'B',
            'В' => 'V',
            'Г' => 'Gh',
            'Д' => 'D',
            'Е' => 'E',
            'Ж' => 'Zh',
            'З' => 'Z',
            'И' => 'Y',
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
            'Х' => 'Kh',
            'Ц' => 'C',
            'Ч' => 'Ch',
            'Ш' => 'Sh',
            'Щ' => 'Shh',
            'Ь' => 'J',
            'Ю' => 'Ju',
            'Я' => 'Ja',
            'а' => 'a',
            'б' => 'b',
            'в' => 'v',
            'г' => 'gh',
            'д' => 'd',
            'е' => 'e',
            'ж' => 'zh',
            'з' => 'z',
            'и' => 'y',
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
            'х' => 'kh',
            'ц' => 'c',
            'ч' => 'ch',
            'ш' => 'sh',
            'щ' => 'shh',
            'ь' => 'j',
            'ю' => 'ju',
            'я' => 'ja',
            'є' => 'je',
            'і' => 'i',
            'ї' => 'ji',
            'Ґ' => 'G',
            'ґ' => 'g',
        ];
    }
}
