<?php
namespace MattAndrews;

class ModelClearTest extends \PHPUnit_Framework_TestCase {

  public function testEmptyTheDataStore() {
    $model = new Model(array('foo' => 'bar'));
    $this->assertEquals('bar', $model->get('foo'));
    $model->clear();
    $this->assertNull($model->get('foo'));
  }

}
