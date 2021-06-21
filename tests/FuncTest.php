<?php

use PHPUnit\Framework\TestCase;
use function func\getDifferenceInList;

final class FuncTest extends TestCase {
  public function testResults1() {
    $this->assertEquals(2, getDifferenceInList('1', 'a'));
  }

  public function testResults2() {
    $this->assertEquals(4, getDifferenceInList('11', 'aa'));
  }

  public function testResults3() {
    $this->assertEquals(1, getDifferenceInList('11', '1ab'));
  }
}