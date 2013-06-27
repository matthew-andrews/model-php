<?php
namespace MattAndrews;

class ModelTest extends \PHPUnit_Framework_TestCase {

  private $_sampleData = array(
    'foo' => 'oof',
    'bar' => 'rab',
    'baz' => 'zab'
  );

  public function testStoresTheArrayPassedIntoTheConstructor() {
    $model = new Model($this->_sampleData);

    $this->assertEquals('oof', $model->get('foo'));
    $this->assertEquals('rab', $model->get('bar'));
    $this->assertEquals('zab', $model->get('baz'));
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

  public function testCanOverwriteSpecificKey() {
    $model = new Model($this->_sampleData);
    $model->set('foo', 'foobar');

    $this->assertEquals('foobar', $model->get('foo'));
    $this->assertEquals('rab', $model->get('bar'));
    $this->assertEquals('zab', $model->get('baz'));
  }

}
