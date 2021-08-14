<?php


namespace algo\sword_means_offer;


use algo\ArrayHelper;

class Smo05
{
    public function solve($str): string
    {
        if (!is_string($str)) {
            return '';
        }
        $i = 0;
        $len = strlen($str);
        $countBlank = 0;
        while ($i < $len) {
            if ($str[$i] === ' ') {
                $countBlank++;
            }
            $i++;
        }
        if ($countBlank == 0) {
            return $str;
        }

        $preI = $len - 1;
        $newI = $len + 2 * $countBlank - 1;
        $strArr = ArrayHelper::makeArray($len + 2 * $countBlank);
        while ($preI >= 0) {
            if ($str[$preI] == ' ') {
                $strArr[$newI--] = '0';
                $strArr[$newI--] = '2';
                $strArr[$newI--] = '%';
            } else {
                $strArr[$newI--] = $str[$preI];
            }
            $preI--;
        }
        return implode('', $strArr);
    }
}