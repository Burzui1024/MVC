<?php


namespace wfm;


class Registry
{
    use TSingleton;

    protected static $properties = [];

    public function setProperties($name, $value)
    {
        self::$properties[$name] = $value;
    }

    public function getProperty($name)
    {
        return self::$properties[$name] ?? null;
    }

    public function getProperties(): array
    {
        return self::$properties;
    }
}