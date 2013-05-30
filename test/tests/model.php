<?php
namespace FT\phruitmachine;

require_once(__DIR__ . '/../../../vendor/autoload.php');

class ModelTest extends \PHPUnit_Framework_TestCase {

  public function testStoresTheArrayPassedIntoTheConstructor() {
    $model = new Model(array(
      'foo' => 'foo',
      'bar' => 'bar',
      'baz' => 'baz'
    ));

    $this->assertEquals('foo', $model->get('foo'));
    $this->assertEquals('bar', $model->get('bar'));
    $this->assertEquals('baz', $model->get('baz'));
  }

  public function testCanBeConstructedWithNoData() {
    $threwException = false;
    try {
      $model = new Model();
    } catch (Exception $exception) {
      $threwException = true;
    }
    $this->assertFalse($threwException);
  }

}
