<?php

namespace Artemiso\Transliterator\Mapping\ru;

use Artemiso\Transliterator\TransliterateCharMap;

class GOST_1971 implements TransliterateCharMap
{
    public static function getCharMap()
    {
        return array (
            'cyr' => array(
                'щ', 'ё', 'ж', 'ч', 'ш', 'ъ', 'ы', 'ь', 'э', 'ю', 'я', 'х', 'й',
                'Щ', 'Ё', 'Ж', 'Ч', 'Ш', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', 'Х', 'Й',
                'а', 'б', 'в', 'г', 'д', 'е', 'з', 'и', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'ц',
                'А', 'Б', 'В', 'Г', 'Д', 'Е', 'З', 'И', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Ц',
            ),
            'lat' => array(
                'shh', 'jo', 'zh', 'ch', 'sh', '"', "y", "'", 'eh', 'ju', 'ja', 'kh', 'jj',
                'Shh', 'Jo', 'Zh', 'Ch', 'Sh', '"', "Y", "'", 'Eh', 'Ju', 'Ja', 'Kh', 'Jj',
                'a', 'b', 'v', 'g', 'd', 'e', 'z', 'i', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'c',
                'A', 'B', 'V', 'G', 'D', 'E', 'Z', 'I', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'C',
            )
        );
    }
}