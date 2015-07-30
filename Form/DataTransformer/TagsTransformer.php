<?php

namespace Redking\Bundle\SonataExtendedBundle\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

class TagsTransformer implements DataTransformerInterface
{
    const SEPARATOR = ',';

    /**
     * Transforms an array to a string.
     *
     * @param  array|null $array
     * @return string
     */
    public function transform($array)
    {
        if (!is_null($array)) {
            for ($i = 0; $i < count($array); $i++) {
                if (is_object($array[$i]) && $array[$i] instanceof \DateTime) {
                    $array[$i] = $array[$i]->format("U");
                }
            }
            return implode(self::SEPARATOR, $array);
        }
        return null;
    }

    /**
     * Transforms a string (email) to an object (user).
     *
     * @param  string $string
     * @return array|null
     */
    public function reverseTransform($string)
    {
        if (!is_null($string)) {
            return explode(self::SEPARATOR, $string);
        }
        return null;
    }
}
