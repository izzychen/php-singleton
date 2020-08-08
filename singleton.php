//File: singleton.php
//Date: 8/8/2020
//Name: iZZY Chen
//Desc: My favorite design pattern is the singleton design pattern.

<?php

class SingleForever { 
  private static $lonely = null;

  function __construct()
  {
    // singleton design pattern
  }
 
  public static function getLife()
  {
    if (self::$lonely == null)
    {
      self::$lonely = new SingleForever();
    }
 
    return self::$lonely;
  }
}
 
$single=new SingleForever;
echo serialize($single->getLife());
echo "------";
$single2=new SingleForever;
echo serialize($single2->getLife());
echo "Still single!";

?>
