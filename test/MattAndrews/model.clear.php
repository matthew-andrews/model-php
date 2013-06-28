<?php

class ModelClearTest extends \PHPUnit_Framework_TestCase {

  public function testEmptyTheDataStore() {
    $model = new \MattAndrews\Model(array('foo' => 'bar'));
    $this->assertEquals('bar', $model->get('foo'));
    $model->clear();
    $this->assertNull($model->get('foo'));
  }

}
