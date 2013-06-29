<?php

class ModelToJSONTest extends \PHPUnit_Framework_TestCase {

  public function test_stores_the_array_passed_into_the_constructor() {
    $model = new \MattAndrews\Model(array(
      'foo' => 'foo',
      'bar' => 'bar',
      'baz' => 'baz'
    ));

    $this->assertEquals('foo', $model->get('foo'));
    $this->assertEquals('bar', $model->get('bar'));
    $this->assertEquals('baz', $model->get('baz'));
  }

}
