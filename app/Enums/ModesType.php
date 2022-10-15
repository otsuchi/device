<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class ModesType extends Enum
{
    const FuncionDescription = 1;
    const Troubleshooting = 2;
    const Recall = 3;
    
     /**
     * Get the description for an enum value
     *
     * @param $value
     * @return string
     */
    public static function getDescription($value): string
    {
        switch ($value){
            case self::FuncionDescription:
                return '機能説明';
                break;
            case self::Troubleshooting:
                return 'トラブル';
                break;
            case self::Recall:
                return 'リコール';
                break;
            default:
                return self::getKey($value);
                break;
        }
    }
    
    public static function toSelectArray(): array
    {
        $array = array();
        $array[self::FuncionDescription] = self::getDescription(self::FuncionDescription);
        $array[self::Troubleshooting] = self::getDescription(self::Troubleshooting);
        $array[self::Recall] = self::getDescription(self::Recall);
        return $array;
    }
}
