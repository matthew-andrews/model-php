<?php

class ModelTest extends \PHPUnit_Framework_TestCase {

    private $_sampleData = array(
        'foo' => 'oof',
        'bar' => 'rab',
        'baz' => 'zab'
    );

    public function testStoresTheArrayPassedIntoTheConstructor() {
        $model = new \MattAndrews\Model($this->_sampleData);

        $this->assertEquals('oof', $model->get('foo'));
        $this->assertEquals('rab', $model->get('bar'));
        $this->assertEquals('zab', $model->get('baz'));
    }

    public function testCanBeConstructedWithNoData() {
        $threwException = false;
        try {
            $model = new \MattAndrews\Model();
        } catch (Exception $exception) {
            $threwException = true;
        }
        $this->assertFalse($threwException);
    }

    public function testCanOverwriteSpecificKey() {
        $model = new \MattAndrews\Model($this->_sampleData);
        $model->set('foo', 'foobar');

        $this->assertEquals('foobar', $model->get('foo'));
        $this->assertEquals('rab', $model->get('bar'));
        $this->assertEquals('zab', $model->get('baz'));
    }

    public function testCanGetAllData() {
        $model = new \MattAndrews\Model($this->_sampleData);
        $this->assertEquals($this->_sampleData, $model->get());
    }

    public function testSetAndClearChain() {
        $model = new \MattAndrews\Model();
        $model->set('apples', 'pears')->clear()->set('123', '456');
        $this->assertEquals(array('123' => '456'), $model->get());
    }

    public function testToJsonReturnsSensibly() {
        $model = new \MattAndrews\Model();
        $model->set('apple', 'pear');
        $actual = $model->toJSON();
        $this->assertEquals(array('apple' => 'pear'), $actual);
    }
}
