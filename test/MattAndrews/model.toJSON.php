<?php

class ModelToJSONTest extends \PHPUnit_Framework_TestCase {

  public function test_toJSON_exports_the_data_in_a_json_serializable_way() {
    $model = new \MattAndrews\Model(array(
      'foo' => 'foo',
      'bar' => 'bar',
      'baz' => 'baz'
    ));
    $actual = $model->toJSON();

    $this->assertEquals('{"foo":"oof","bar":"rab","baz":"zab"}', json_encode($actual));
  }

}
