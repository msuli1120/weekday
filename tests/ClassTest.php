<?php
  require_once 'src/Weekday.php';

  class ClassTest extends PHPUnit_Framework_TestCase {

    function testClass () {
      $test_class = new Weekday;
      $input = "03/22/2017";
      $result = $test_class->find($input);
      $this->assertEquals("Wednesday", $result);
    }
  }
?>
