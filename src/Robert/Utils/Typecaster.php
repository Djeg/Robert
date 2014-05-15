<?php

namespace Robert\Utils;

/**
 * A simple static class that handle the definition type casting.
 *
 * @author David Jegat <david.jegat@gmail.com>
 */
abstract class Typecaster
{
    /**
     * Transform the value to a valid scalar
     *
     * @param mixed $value
     *
     * @return string
     */
    public static function toScalar($value)
    {
        return (string)$value;
    }

    /**
     * Transform a value to a valid numeric.
     *
     * @param mixed $value
     *
     * @return numeric
     */
    public static function toNumeric($value)
    {
        if (is_numeric($value)) {
            return $value;
        }

        if (is_string($value)) {
            if (strpos($value, ',') !== false) {
                return (float)str_replace(',', '.', $value);
            } else if (strpos($value, '.') !== false) {
                return (float)$value;
            } else {
                return (int)$value;
            }
        }

        return (int)$value;
    }

    /**
     * Convert a value to a valid boolean.
     *
     * @param mixed $value
     *
     * @return boolean
     */
    public static function toBoolean($value)
    {
        return (bool)$value;
    }

    /**
     * Cast a variable to an object.
     *
     * @param mixed $value
     *
     * @return object
     */
    public static function toObject($value)
    {
        if (is_object($value)) {
            return $value;
        }

        $instance = new \StdClass;

        if (!is_array($value)) {
            $instance->value = $value;

            return $instance;
        }

        foreach ($value as $key => $content) {
            $instance->{$key} = $content;
        }

        return $instance;
    }

    /**
     * Transform a miwed value to an array
     *
     * @param mixed $value
     *
     * @return array
     */
    public static function toArray($value)
    {
        if (is_array($value)) {
            return $value;
        }

        return (array)$value;
    }
}
