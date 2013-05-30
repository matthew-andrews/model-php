<?php
namespace FT\phruitmachine;

require_once(__DIR__ . '/../../../vendor/autoload.php');

class ModelClearTest extends \PHPUnit_Framework_TestCase {

  public function testEmptyTheDataStore() {
    $model = new Model(array('foo' => 'bar'));
    $this->assertEquals('bar', $model->get('foo'));
    $model->clear();
    $this->assertNull($model->get('foo'));
  }

}
