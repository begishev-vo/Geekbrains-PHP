<?php

trait Singleton
{
    private static $instance;

    public static function getInstance():self
    {
        if (null === self:: $instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }
    private function __construct()
    {

    }

    private function __wakeup()
    {

    }

    private function __clone()
    {

    }
}


class Utility
{
    use Singleton;

    public function echoArray(array $arr): void
    {
        print_r($arr);
    }
}

class AnohterUtility
{
    use Singleton;

    private $int;

    private function __construct()
    {
        $this->int = random_int(1, 50);
    }

    public function getInt(): int
    {
        return $this->int;
    }
}


Utility::getInstance()->echoArray([1,2,3]);

echo AnohterUtility::getInstance()->getInt(), "\n";
echo AnohterUtility::getInstance()->getInt(), "\n";
echo AnohterUtility::getInstance()->getInt(), "\n";