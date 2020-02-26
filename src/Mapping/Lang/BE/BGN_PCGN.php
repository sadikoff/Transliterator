<?php

namespace Koff\Transliterator\Mapping\Lang\BE;

use Koff\Transliterator\Mapping\MappingInterface;

final class BGN_PCGN implements MappingInterface
{
    public function getCharMapping(): array
    {
        return [
            'Ё' => 'Yo',
            'І' => 'I',
            'Ў' => 'W',
            'А' => 'A',
            'Б' => 'B',
            'В' => 'V',
            'Г' => 'H',
            'Д' => 'D',
            'Дж' => 'Dzh',
            'Дз' => 'Dz',
            'Е' => 'Ye',
            'Ж' => 'Zh',
            'З' => 'Z',
            'Й' => 'Y',
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
            'Ц' => 'Ts',
            'Ч' => 'Ch',
            'Ш' => 'Sh',
            'Ы' => 'Y',
            'Ь' => '–',
            'Э' => 'E',
            'Ю' => 'Yu',
            'Я' => 'Ya',
            'а' => 'a',
            'б' => 'b',
            'в' => 'v',
            'г' => 'h',
            'д' => 'd',
            'дж' => 'dzh',
            'дз' => 'dz',
            'е' => 'ye',
            'ж' => 'zh',
            'з' => 'z',
            'й' => 'y',
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
            'ц' => 'ts',
            'ч' => 'ch',
            'ш' => 'sh',
            'ы' => 'y',
            'ь' => '–',
            'э' => 'e',
            'ю' => 'yu',
            'я' => 'ya',
            'ё' => 'yo',
            'і' => 'i',
            'ў' => 'w'
        ];
    }
}