<?php

class ModelClearTest extends \PHPUnit_Framework_TestCase {

  public function test_empty_the_data_store() {
    $model = new \MattAndrews\Model(array('foo' => 'bar'));
    $this->assertEquals('bar', $model->get('foo'));
    $model->clear();
    $this->assertNull($model->get('foo'));
  }

}
