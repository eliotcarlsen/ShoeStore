<?php
/**
  * @backupGlobals disabled
  * @backupStaticAttributes disabled
  */
$server = 'mysql:host=localhost:8889;dbname=shoes_test';
$username= "root";
$password = "root";
$DB = new PDO($server, $username, $password);
require_once "src/Brand.php";
require_once "src/Store.php";
class StoreTest extends PHPUnit_Framework_TestCase
{
  protected function tearDown()
  {
      Course::deleteAll();
      Student::deleteAll();
  }

  function test_save()
  {
      $store = new Store("footlocker");
      $store->save();
      
  }
}
?>