<?php

class Singleton
{
  private static $instances = [];

  public static function getInstance(): static
  {
    $cls = static::class;

    if (!isset(self::$instances[$cls])) {
      self::$instances[$cls] = new static();
    }

    return self::$instances[$cls];
  }

  public function __wakeup()
  {
    throw new \Exception("Cannot unserialize a singleton.");
  }

  protected function __construct()
  {
  }

  private function __clone()
  {
  }
}
